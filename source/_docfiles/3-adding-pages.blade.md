---
extends: _layouts.page
navTitle: Adding Pages
navOrder: 2-1
navSlug: adding-pages
pageTitle: Adding Pages
startActive: false
topDivider: true
section: content
---

<p>Creating pages is simple in your new admin backend.</p>

<h3>Add a page</h3>
<p>Click the menu item <span class="menu-item">Content</span> and then
<span class="menu-item">Pages</span>. You'll come to a table of pages
on your site. Click the <span class="button button-plain">New Page</span> button
in the top right and give it a name in the <span class="input-field">Page Name</span>
field. If you want to make your page live on your front-end right away, check the
<span class="box"><span class="box-inside">&#10003;</span></span> Live checkbox.
When you're finished, click <span class="button button-success">Create</span>.</p>

<h3>Adding content</h3>
<p>By clicking <span class="button button-plain">View</span> on your new page's entry,
you can add content that will be displayed on it when rendered from a view. The
default entries are 'Main Content' and 'Snippet'. Clicking on one will open their box
and allow you to enter text and add images using the simple editor.</p>

<p>To add a new content section, click
<span class="button button-success">Add Content</span> under the content boxes and
give it a name. The Type of content will define what the user can type into the
fields:</p>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th>Type</th>
      <th>What it does</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Text</td>
      <td>Single-line text field.</td>
    </tr>
    <tr>
      <td>Text Area</td>
      <td>Resizable multi-line text field.</td>
    </tr>
    <tr>
      <td>Content Editor</td>
      <td>Text editor with options for defining text styles (bold, underline, italic,
          lists, headings, images, blockquotes).</td>
    </tr>
    <tr>
      <td>Multi</td>
      <td>Allows adding more fields into this field.</td>
    </tr>
  </tbody>
</table>

<h3>Remove a page</h3>
<p>Removing a page is as simple as clicking the <span class="button button-danger">Delete</span> button on the row of the page
you wish to delete. Be aware that this action cannot be undone, with all the content
on the page being removed</p>
