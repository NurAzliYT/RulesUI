<?php
declare(strict_types=1);

namespace Rules\RulesUI;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use thebigcrafter\Hydrogen\HConfig;
use thebigcrafter\Hydrogen\Hydrogen;
use jojoe77777\FormsUI\SimpleForm;
use function str_replace;

class Main extends PluginBase {

	protected function onEnable() : void {
		$this->saveDefaultConfig();

		$this->getServer()->getCommandMap()->register("RulesUI", new Commands(
			$this, $this->getConfig()->get("command-desc"),
			$this->getConfig()->get("command-aliases")
		));

		Hydrogen::checkForUpdates($this);
		HConfig::verifyConfigVersion($this->getConfig(), "1.0");
	}

	public function RulesUI(Player $player) {
		$form = new SimpleForm(function (Player $player, int $data = null) {
			if ($data === null) {
				return true;
			}
		});
		$title = str_replace("{player}", $player->getName(), TextFormat::colorize($this->getConfig()->get("title")));
		$content = str_replace("{player}", $player->getName(), TextFormat::colorize($this->getConfig()->get("content")));
		$button = str_replace("{player}", $player->getName(), TextFormat::colorize($this->getConfig()->get("button")));
		$form->setTitle($title);
		$form->setContent($content);
		$form->addButton($button);
		$player->sendForm($form);
	}

}
