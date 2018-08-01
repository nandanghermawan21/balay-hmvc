<div class="mdl-cell mdl-shadow--2dp mdl-color--white mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone inner-cell-container mobile-cell-container"><h2 class="h2-header"><a href="#" class="link-header">Posts</a></h2><div style="margin-bottom:3px"><button class="mdl-button mdl-button--fab mdl-button--colored" title="New post" onClick="newPost()" type="button">+</button><button disabled class="mdl-button mdl-button--raised mdl-button--colored btn-edit" type="button" title="Edit post">Edit</button><button disabled class="mdl-button mdl-button--raised mdl-button--colored btn-publish" type="button" title="Publish post">Publish</button><button disabled class="mdl-button mdl-button--raised mdl-button--accent btn-unpublish" type="button" title="Un-publish post">Un-Publish</button><div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable"><label class="mdl-button mdl-js-button mdl-button--icon" for="search"><i class="material-icons"><svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#888" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg></i></label><div class="mdl-textfield__expandable-holder"><input class="mdl-textfield__input search-query" type="text" id="search" value="<?php echo $this->input->get('q',true);?>" placeholder="Search"><label class="mdl-textfield__label" for="search"></label></div><a href="<?php echo site_url('backend/post');?>">Clear</a></div><span>&nbsp;| Total: <?php echo $paging['total_rows'];?> Posts</span></div><div class="table-container"><table class="mdl-data-table mdl-shadow--2dp"><thead><tr><th>#</th><th class="mdl-data-table__cell--non-numeric">Status</th><th class="mdl-data-table__cell--non-numeric">Created at</th><th class="mdl-data-table__cell--non-numeric">Title</th><th class="mdl-data-table__cell--non-numeric">Link</th><th class="mdl-data-table__cell--non-numeric">View</th><th class="mdl-data-table__cell--non-numeric">Creator</th></tr></thead><tbody><?php if($article){$i=0;foreach($article as $ar){?><tr class="post-row-<?=$i?>" data-art="<?php echo htmlentities(json_encode($ar),ENT_QUOTES,'UTF-8');?>"><td><input type="checkbox" id="row[<?=$i?>]" class="mdl-checkbox__input post-checkbox" data-row-id="<?=$i?>"></td><td class="mdl-data-table__cell--non-numeric"><?php echo $ar['status']?></td><td class="mdl-data-table__cell--non-numeric"><?php echo $ar['created_at']?></td><td class="mdl-data-table__cell--non-numeric" style="width:75%"><?php echo $ar['title']?></td><td class="mdl-data-table__cell--non-numeric"><a href="<?php echo site_url('read/'.$ar['slug']);?>" target="_blank">Live Link</a></td><td class="mdl-data-table__cell--non-numeric"><?php echo $ar['pageview']?></td><td class="mdl-data-table__cell--non-numeric"><?php echo $ar['created_by']?></td></tr><?php $i++;}}?></tbody></table></div><div class="pagination-container"><?php echo $paging['paging_link'];?></div><br></div><input type="hidden" id="post-id"><dialog class="mdl-dialog publish-dialog"><h4 class="mdl-dialog__title">Confirm?</h4><div class="mdl-dialog__content"><p> Publish Post </p><p class="post-title"></p></div><div class="mdl-dialog__actions"><button type="button" class="mdl-button publish-post">Publish</button><button type="button" class="mdl-button publish-close">Cancel</button></div></dialog><dialog class="mdl-dialog unpublish-dialog"><h4 class="mdl-dialog__title">Confirm?</h4><div class="mdl-dialog__content"><p> Un-Publish Post </p><p class="post-title"></p></div><div class="mdl-dialog__actions"><button type="button" class="mdl-button unpublish-post">un-Publish</button><button type="button" class="mdl-button unpublish-close">Cancel</button></div></dialog>
