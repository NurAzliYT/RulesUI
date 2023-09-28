<?php

declare(strict_types=1);

namespace NurAzliYT\RulesUI;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginOwned;
use pocketmine\utils\TextFormat;

class Commands extends Command implements PluginOwned {

	private Main $main;

	public function __construct(Main $main, string $desc, array $aliases) {
		$this->main = $main;
		$desc = empty($desc) ? "Server rules in UI form" : $desc;
		parent::__construct("rules", $desc, "/rules", $aliases);
		$this->setPermission("rulesui.rules");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
		if (!$sender instanceof Player) {
			$sender->sendMessage(TextFormat::RED . "[RulesUI] This command only works in game!");
		} else {
			if (!$this->testPermissionSilent($sender)) {
				$sender->sendMessage(TextFormat::RED . "[RulesUI] You do not have permission to use this command!");
			} else {
				$this->getOwningPlugin()->getConfig()->reload();
				$this->getOwningPlugin()->RulesUI($sender);
			}
		}
		return true;
	}

	public function getOwningPlugin() : Main {
		return $this->main;
	}

}
