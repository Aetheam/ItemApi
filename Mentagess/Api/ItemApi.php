<?php

namespace Mentagess\Api;

use pocketmine\item\StringToItemParser;

final class ItemApi {
  
public function get(string $identifier): Item {
        $item = StringToItemParser::getInstance()->parse($identifier);
        if($item === null) {
            throw new InvalidArgumentException("The item " . $identifier . " does not exist ! ");
        }
        return $item;
    }
}
