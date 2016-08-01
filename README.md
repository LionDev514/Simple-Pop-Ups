# Simple-Pop-Ups
This is a pocketmine plugin for display popups and tips
Get the .phar file [Here](http://forums.pocketmine.net/plugins/simple-pop-ups.2070/)

## Commands:
* /pop-up (msg)
* /tip (msg)

## Permisions:
```
  simplepopups:
    default: op
    description: "algo"
    children:
     simplepopups.command:
      default: op
      description: "commands"
      children:
       simplepopups.command.popup:
        default: op
        description: "popup"
        children:
          simplepopups.command.tip:
          default: op
          description: "tip"
```
