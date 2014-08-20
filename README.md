Overcast-Wiki
=============

The unofficial Overcast Wiki 

## Pull Requests

If you would like to add to the wiki or change something, fork the repo and then create a Pull Request. 
If the PR contributes to the website, I will accept the change and edit the website. 

Note: Please have the latest fork of the repo before submitting the PR. 

### Pull Request Guidelines

All Pull Requests submitted *must* follow these guidelines or they will be marked invalid. Submit an issue if you cannot provide a pull request of the guideline standards.

1. The PR must contain actual code; no walls of text.
2. The PR must be a useful contribution.
  * PRs adding inaccurate information will be rejected.
3. PRs must use the latest fork of the repo.
4. Ensure you're not submitting a duplicate PR by searching before submitting.
5. These guidelines are subject to change at any time.
6. Existing PRs are not subject to any changes in guidelines provided they are not updated after the change.

## Editing Wiki

When you edit the wiki, you should (unless changing the backend portion), follow guidelines for keeping the format of the wiki the same on all pages. Please refer to the appropriate entry below for guidelines for the page you're editing.

- Gamemodes, PVP Tips, Tournaments
 - Adding a new entry
  - Add a tab, copy and paste the last one, and change the tab number & title.
  - Add a tab div, copy and paste the last one, and change the tab number & content.
 - Editing an old entry
  - Edit the title of the tab, and the content of the tab at your discretion, however unless explicitly needed do not edit the other parts of the html layout.
- Commands
 - Follow the guidelines for the above section, however with a few additions to formatting a page.
 - All commands you would run in game should be surrounded by `<kbd>/command</kbd>` even when not directly in the context of 'run this in game'
 - The div is formatted like this
```
<div class="col-md-9">
	<div class="page-header">
		<h1>/command <small>Description</small></h1>
	</div>
 <b>Usage:</b>
 <p><kbd>/command [parameter] [parameter...]</kbd></p>
 <b>Other info:</b>
 <p>Other information about the command, not required.</p>
</div>
```
- Ranks
 - Ranks are edited in `ranks.json`
 - Edit the file per the entries already there. If you add a new rank, its example should correspond to a screenshot in `/assets/img/ranks/Username.png`. This is case sensitive.
 - Refer to http://json.org for syntax.
 - Please do not remove the whitespace formatting & make it one line of json, this is not being sent to the browser, and should be formatted for easier editing.
