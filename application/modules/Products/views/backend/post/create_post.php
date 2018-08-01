
<div class="mdl-cell mdl-shadow--2dp mdl-color--white mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone inner-cell-container mobile-cell-container">
<h2 class="h2-header">
    <a href="#" class="link-header">Create Post</a>
</h2>
<form id="post-form" action="<?php echo site_url('/backend/post/save_post'); ?>" method="post">
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--5-col">
            <div class="mdl-textfield mdl-cell--12-col">
              <label>Title</label>
              <input id="f-title" class="mdl-textfield__input" name="title" type="text" required placeholder="input title...">
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
              <label>Image thumbnail</label>
              <input id="f-thumbnail" class="mdl-textfield__input" name="thumbnail" type="text" required placeholder="input Thumbnail...">
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
              <label>Posted Date</label>
              <input id="f-date" class="mdl-textfield__input" name="posted_date" type="datetime-local" required placeholder="input Thumbnail...">
              <small style="color:#999">Use Chrome or Opera for this</small>
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
                <input id="f-code" class="" name="contain_code" type="checkbox">
                Contain Code <small style="color:#999">(javascript, php etc)</small>?
            </div>
            <button class="mdl-button mdl-button--raised" id="submit-post" type="submit">
            Submit
            </button>
        <br>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
        <label>Content</label>
        </hr>
        <textarea  id="content" name="content"></textarea>
    </div>
</div>
</form>
</div>
