# Simple-Pop-Ups
This is a pocketmine plugin for display popups and tips.
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

# MailSender
This is a pocketmine plugin for send mails and html mails. Get the .phar file [Here]()

## Commands
* /send (email) (msg)
* /sendhtml (email)

## Permisions
```
mailsender:
  default: op
  description: "algo"
  children:
   mailsender.command:
    default: op
    description: "commands"
    children:
     mailsender.command.send:
      default: op
      description: "send"
      children:
        mailsender.command.sendhtml:
        default: op
        description: "html"
```
## How-To
### Make it work 
in the resources folder for this plugin,the sendFiles folder should upload it to some sort of web hosting , or run it on localhost (not recommended)
### Configure
edit the send.php, only the parts marked with the label #edit this area
### Run
you already know :v
