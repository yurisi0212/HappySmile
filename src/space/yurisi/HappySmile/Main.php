<?php
declare(strict_types=1);

namespace space\yurisi\HappySmile;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    protected function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onChat(PlayerChatEvent $event){
        $message = $event->getMessage();
        $rand = mt_rand(0,1);
        if(in_array($message,['死ね', 'しね ', 'カス', 'かす', 'ごみ',  'ゴミ',  'は？',  '消えろ', '意味不明'])){
            $event->setMessage((bool)$rand ? 'エンジェルトルネードでWAKUWAKU♪(゜∀゜)ノ キュンキュン キミのハートを盗めるのかな?' : 'やっぱり好きでした!! (＞_＜)  (゜∀゜)ノ キュンキュン☆ キュキュン イェイ☆');
        }
    }
}