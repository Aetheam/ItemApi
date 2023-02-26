# ItemApi
This is a plugin for pocketmine 5.0, this plugin is used to get items more easily than what pocketmine offers us. 


Use : 


```
use Mentagess\Api\ItemApi;
```

```
ItemApi::get("minecraft:diamond_sword");
```

You can of course 'getCount' and 'setCount' using pocketmine's class item. 

```
ItemApi::get("minecraft:diamond_sword")->getCount(); 
```

```
ItemApi::get("minecraft:diamond_sword")->setCount(); 
```
