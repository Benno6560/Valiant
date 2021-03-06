<?php

declare(strict_types=1);

namespace Valiant\Utils;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;
use pocketmine\Player;
use Valiant\Core;

class KitUtil {

    public $plugin;

    public function __construct(Core $plugin) {
        $this->plugin = $plugin;
    }

    public function sendKit(Player $player, string $kit) {
        switch($kit) {
            case "NoDebuff":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(2);
                $player->setImmobile(false);
                $player->setAllowFlight(false);
                $player->setFlying(false);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $helmet = Item::get(310, 0, 1);
                $helmet->setCustomName("§r§l§cNoDebuff");
                $helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setHelmet($helmet);
                $chestplate = Item::get(311, 0, 1);
                $chestplate->setCustomName("§r§l§cNoDebuff");
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setChestplate($chestplate);
                $leggings = Item::get(312, 0, 1);
                $leggings->setCustomName("§r§l§cNoDebuff");
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setLeggings($leggings);
                $boots = Item::get(313, 0, 1);
                $boots->setCustomName("§r§l§cNoDebuff");
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setBoots($boots);
                $sword = Item::get(276, 0, 1);
                $sword->setCustomName("§r§l§cNoDebuff");
                $sword->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, Item::get(368, 0, 16));
                $player->getInventory()->addItem(Item::get(438, 22, 36));
                $player->addEffect(new EffectInstance(Effect::getEffect(1), 45*1200, 0, false));
                break;
            case "Combo":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(2);
                $player->setImmobile(false);
                $player->setAllowFlight(false);
                $player->setFlying(false);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $helmet = Item::get(310, 0, 1);
                $helmet->setCustomName("§r§l§cCombo");
                $helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setHelmet($helmet);
                $chestplate = Item::get(311, 0, 1);
                $chestplate->setCustomName("§r§l§cCombo");
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setChestplate($chestplate);
                $leggings = Item::get(312, 0, 1);
                $leggings->setCustomName("§r§l§cCombo");
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setLeggings($leggings);
                $boots = Item::get(313, 0, 1);
                $boots->setCustomName("§r§l§cCombo");
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setBoots($boots);
                $sword = Item::get(276, 0, 1);
                $sword->setCustomName("§r§l§cCombo");
                $sword->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $egap = Item::get(Item::ENCHANTED_GOLDEN_APPLE, 0, 5);
                $egap->setCustomName("§r§l§6E-Gap");
                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, $egap);
                $player->addEffect(new EffectInstance(Effect::getEffect(1), 45*1200, 0, false));
                break;
            case "Resistance":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(2);
                $player->setImmobile(false);
                $player->setAllowFlight(false);
                $player->setFlying(false);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $player->addEffect(new EffectInstance(Effect::getEffect(11), 45*1200, 10, false));
                break;
            case "Lobby":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(2);
                $player->setImmobile(false);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $duels = Item::get(Item::DIAMOND_SWORD, 0, 1);
                $duels->setCustomName("§r§l§cDuels");
                $duels->setLore(["§r§aComing soon!"]);
                $ffa = Item::get(Item::IRON_SWORD, 0, 1);
                $ffa->setCustomName("§r§l§cFFA Arenas");
                $ffa->setLore(["§r§aJoin FFA PVP!"]);
                $spectate = Item::get(Item::WOODEN_SWORD, 0, 1);
                $spectate->setCustomName("§r§l§cSpectate");
                $spectate->setLore(["§r§aSpectate FFA!"]);
                $events = Item::get(Item::TOTEM, 0, 1);
                $events->setCustomName("§r§l§cEvents");
                $events->setLore(["§r§aJoin a sumo Event!"]);
                $settings = Item::get(Item::CLOCK, 0, 1);
                $settings->setCustomName("§r§l§cSettings");
                $settings->setLore(["§r§aModify your settings!"]);
                $hub = Item::get(Item::COMPASS, 0, 1);
                $hub->setCustomName("§r§l§cHub");
                $hub->setLore(["§r§aReturn to the hub!"]);
                $player->getInventory()->setItem(0, $duels);
                $player->getInventory()->setItem(1, $ffa);
                $player->getInventory()->setItem(2, $spectate);
                $player->getInventory()->setItem(4, $events);
                $player->getInventory()->setItem(7, $settings);
                $player->getInventory()->setItem(8, $hub);
                $player->getInventory()->setHeldItemIndex(0);
                break;
            case "StaffMode":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(3);
                $player->setImmobile(false);
                $player->setAllowFlight(true);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $freezeitem = Item::get(Item::ICE, 0, 1);
                $freezeitem->setCustomName("§r§l§bFreeze a Player");
                $tpitem = Item::get(Item::COMPASS, 0, 1);
                $tpitem->setCustomName("§r§l§6Teleport");
                $banitem = Item::get(Item::PAPER, 0, 1);
                $banitem->setCustomName("§r§l§cStaff Portal");
                $adminitem = Item::get(Item::CLOCK, 0, 1);
                $adminitem->setCustomName("§r§l§eAdmin Tools");
                $exitstaffmode = Item::get(Item::WOOL, 14, 1);
                $exitstaffmode->setCustomName("§r§l§aExit StaffMode");
                $player->getInventory()->setItem(2, $freezeitem);
                $player->getInventory()->setItem(3, $tpitem);
                $player->getInventory()->setItem(4, $exitstaffmode);
                $player->getInventory()->setItem(5, $banitem);
                $player->getInventory()->setItem(6, $adminitem);
                $player->getInventory()->setHeldItemIndex(4);
                break;
            case "Gapple":
                $player->extinguish();
                $player->setScale(1);
                $player->setGamemode(2);
                $player->setImmobile(false);
                $player->setAllowFlight(false);
                $player->setFlying(false);
                $player->removeAllEffects();
                $player->setXpLevel(0);
                $player->setXpProgress(0.0);
                $player->setFood(20);
                $player->setHealth(20);
                $player->getInventory()->setSize(36);
                $player->getInventory()->clearAll();
                $player->getArmorInventory()->clearAll();
                $helmet = Item::get(310, 0, 1);
                $helmet->setCustomName("§r§l§cGapple");
                $helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setHelmet($helmet);
                $chestplate = Item::get(311, 0, 1);
                $chestplate->setCustomName("§r§l§cGapple");
                $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setChestplate($chestplate);
                $leggings = Item::get(312, 0, 1);
                $leggings->setCustomName("§r§l§cGapple");
                $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setLeggings($leggings);
                $boots = Item::get(313, 0, 1);
                $boots->setCustomName("§r§l§cGapple");
                $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $player->getArmorInventory()->setBoots($boots);
                $sword = Item::get(276, 0, 1);
                $sword->setCustomName("§r§l§cGapple");
                $sword->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(17), 10));
                $egap = Item::get(Item::GOLDEN_APPLE, 0, 10);
                $egap->setCustomName("§r§l§6Gapple");
                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, $egap);
                break;
        }
    }
}