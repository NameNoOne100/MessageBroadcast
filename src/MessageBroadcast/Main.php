<?php

  namespace MessageBroadcast;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\command\Command;
  use pocketmine\command\CommandSender;
  use pocketmine\command\CommandExecutor;

  class Main extends PluginBase implements Listener {

    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

      if($cmd->getName()) === "broadcast") {

        $msg = implode(" ", $args);
        $this->getServer()->broadcastMessage($msg);
