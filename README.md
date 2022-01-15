# QuickSearch
Add a search box to the top of mantisbt pages.

!(screenshot.png)

It will redirect you to the search page with otherwise default parameters but the text filter applied.


## Installation

1) Drop in plugins folder as normal
2) Activate in mantis settings panel
3) I recommend setting priority to lowest (5) since this requests jquery and doing so can clobber jquery-cookie if that is used by other plugin

## Caveats & known bugs:

- Since this waits for document to be ready before modifying it in javascript, the text search box will flicker in on load if you're looking closely.  It would be better to do this serverside to prevent this, but I didn't see any hooks to either render elements to the breadcrumbs area, or a way to modify jump_to_bug.php via a plugin.  Alternatively, maybe someone who knows javascript better can fix this.
- Coding was done quickly in vim, so tabs/formatting is all over the place, sorry =\
- Search box does not show up on error pages

