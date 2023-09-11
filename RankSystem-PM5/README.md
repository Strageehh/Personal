[![](https://poggit.pmmp.io/shield.state/RankSystem)](https://poggit.pmmp.io/p/RankSystem)
[![](https://poggit.pmmp.io/shield.dl.total/RankSystem)](https://poggit.pmmp.io/p/RankSystem)

<div align="center">
  <h1> 👑 RankSystem 🔧</h1>
  <p>An amazing Rank and Permissions Manager</p>
</div>

## Description:
An amazing Rank and Permissions Manager. The best ranks manager for PocketMine-MP.
## For Developers
Examples and tutorials can be found on the [RankSystem Wiki](https://github.com/IvanCraft623/RankSystem/wiki).

# Features

- Multi-language support
- Multiple Ranks per user support
- Data migrator from other ranks/groups plugins (PurePerms)
- An easy to use User Interface
- Multi-rank inheritance system to allow you to inherit rank permissions
- Temp-ranks
- Temp-permissions
- SQLite3 Provider Support
- MySQL Provider Support
- Easy Rank Creation / Edit System
- Ranks inheritance system to allow inherit other ranks permissions
- Permissions per User
- Provides simple and flexible API for plugin developers
- ScoreHud Integration
- And more...!

# Commands
Command | Description | Permission
--- | --- | ---
`/ranksystem manage` | Open a form to manage RankSystem | ranksystem.command.manage
`/ranksystem create` | Create a Rank | ranksystem.command.create
`/ranksystem delete <rank>` | Delete a Rank. | ranksystem.command.delete
`/ranksystem edit <rank>` | Edit a Rank | ranksystem.command.edit
`/ranksystem list` | Show all ranks list. | ranksystem.command.list
`/ranksystem setrank <user> <rank> [expTime]` | Set a Rank to a User | ranksystem.command.setrank
`/ranksystem removerank <user> <rank>` | Remove a Rank of a User | ranksystem.command.removerank
`/ranksystem setpermission <user> <permission> [expTime]` | Set a Permission to a User | ranksystem.command.setpermission
`/ranksystem removepermission <user> <permission>` | Remove a Permission of a User | ranksystem.commands.removepermission
`/ranksystem permissions <plugin>` | Show a list of all plugin permissions | ranksystem.command.permissions
`/ranksystem rankinfo <rank>` | Show info about a rank | ranksystem.command.rankinfo
`/ranksystem userinfo <user>` | Show info about a user | ranksystem.command.userinfo
`/ranksystem help` | Show avaible RankSystem commands | ranksystem.command.help
`/ranksystem credits` | Show RankSystem Credits | ranksystem.command.credits

# ScoreHud Integration
This plugin supports ScoreHud plugin.
Tag | Description
--- | ---
`{ranksystem.ranks}` | The ranks of the player
`{ranksystem.highest_rank}` | The player's highest rank
`{ranksystem.nametag}` | NameTag assigned by RankSystem to the player


# Project information
Version | Pocketmine API | PHP | Status
--- | --- | --- | ---
1.1.2 | [PM5](https://github.com/pmmp/PocketMine-MP/tree/stable) | 8 | Functional
