<h1 align="center">RulesUI</h1>

<p align="center">
<a href="https://poggit.pmmp.io/p/RulesUI"><img src="https://poggit.pmmp.io/shield.dl.total/RulesUI?style=for-the-badge" alt="poggit" /></a>
<a href="https://github.com/NurAzliYT/RulesUI#GPL-3.0-1"><img src="https://img.shields.io/github/license/NurAzliYT/RulesUI?style=for-the-badge" alt="license" /></a>
<a href="https://discord.gg/PykBfE2TZ9"><img src="https://img.shields.io/discord/1087729577004122112?color=7289DA&label=discord&logo=discord&style=for-the-badge" alt="discord" /></a>
</p>

# 📖 About

A plugin that will show your server rules in UI form. To open RulesUI, simply type `/rules` in the chat.

# 🧩 Features

- Easy to use (you can set the `title`, `content` and `button` in the `config.yml`)
- No need to restart, config will automatically get reloaded every time the `/rules` command gets executed!
- Use `{player}` to display player name
- Use `§` as formatting codes
- Use `\n` to break into a new line
- Change command description to suit your server
- Supports command aliases
- FormAPI plugin is not required
- Automatic plugin update checker on server startup

# ⬇️ Installation

1. Download the latest version (It is recommended to always download the latest version for the best experience, except you're having compatibility issues).
2. Put the .phar file to the `plugins` folder.
3. Restart the server.
4. Open the `config.yml` file in the `plugin_data/RulesUI` folder to edit the `title`, `content` and `button` (NEVER TOUCH THE `config-version`!).
5. Join the server and type `/rules` in the player chat.
6. Done!

# 📜 Commands & Permissions

| Command | Default Description | Permission | Default |
| --- | --- | --- | --- |
| `/rules` | Server rules in UI form | `rulesui.rules` | true |

💡 Tips:
- Command description can be changed in `config.yml`. You can also add command aliases in `config.yml`.  
- Use `rulesui.rules` to blacklist the `/rules` command permission to groups/users in PurePerms.

