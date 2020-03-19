<?php
    
    namespace yuiful\JoinQuitMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\Player;

class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    // これが無いとプレイヤーが入ってきても反応しない！
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getLogger()->info("§c[起動] §bJoin&QuitMessageを起動しました");
  }
  
  public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();// 入ってきたプレイヤーを取得
    $name = $player->getName();// プレイヤーから名前を取得
    $event->setJoinMessage($name . "さんが参加しました！");// PlayerJoinEventのsetJoinMessage関数を呼び出す
  }
    public function onQuit(PlayerQuitEvent $event) {
    $player = $event->getPlayer();
        $name = $player->getName();
        $event->setQuitMessage($name . "さんが退出しました...");
    }
    
    public function onDisable() {
        $this->getLogger()->info("§4[終了] §bJoin&QuitMessageを終了しています");
    }
}
?>
