<a href="<?php echo base_url('dashboard/invitation/del/' . $id); ?>" class="btn btn-danger pull-right"><i class="icon-trash"></i> Delete</a>
<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="#Groom" data-toggle="tab">Bridegroom</a>
    </li>
    <li class="">
        <a href="#Bride" data-toggle="tab">Bride</a>
    </li>
    <li class="">
        <a href="#Wedding" data-toggle="tab">Wedding</a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="Groom">
        <div class="control-group">
            <label class="control-label" for="groom-name">Name</label>
            <div class="controls">
                <input type="text" id="name" name="groom-name" value="<?php echo $groom_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="groom-nick">Nick Name</label>
            <div class="controls">
                <input type="text" id="nick" name="groom-nick" value="<?php echo $groom_nick_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="groom-father">Father's Name</label>
            <div class="controls">
                <input type="text" id="father" name="groom-father" value="<?php echo $groom_father_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="groom-mother">Mother's Name</label>
            <div class="controls">
                <input type="text" id="mother" name="groom-mother" value="<?php echo $groom_mother_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="groom-bio">Bio</label>
            <div class="controls">
                <textarea name="groom-bio"><?php echo $groom_bio ?></textarea>
            </div>
        </div>
        <!--<div class="control-group">
            <div class="controls">
                <button type="submit" class="btn">Change</button>
            </div>
        </div>-->
    </div>
    <div class="tab-pane fade" id="Bride">
        <div class="control-group">
            <label class="control-label" for="bride-name">Name</label>
            <div class="controls">
                <input type="text" id="name" name="bride-name" value="<?php echo $bride_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-nick">Nick Name</label>
            <div class="controls">
                <input type="text" id="nick" name="bride-nick" value="<?php echo $bride_nick_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Father's Name</label>
            <div class="controls">
                <input type="text" id="father" name="bride-father" value="<?php echo $bride_father_name; ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-mother">Mother's Name</label>
            <div class="controls">
                <input type="text" id="mother" name="bride-mother" value="<?php echo $bride_mother_name; ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-bio">Bio</label>
            <div class="controls">
                <textarea name="bride-bio"><?php echo $bride_bio; ?></textarea>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="Wedding">
        <div class="control-group">
            <label class="control-label" for="bride-name">Love Story</label>
            <div class="controls">
                <textarea class="input-block-level" name="love-story" rows="10"><?php echo $love_story; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-nick">Message</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $message; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Invitation Date</label>
            <div class="controls">
                <input type="text" id="father" name="bride-father" value="<?php echo $date ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-mother">Invitation Time</label>
            <div class="controls">
                <input type="text" id="mother" name="bride-mother" value="<?php echo $time ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-bio">Address</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $address ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Reception Date</label>
            <div class="controls">
                <input type="text" id="father" name="bride-father" value="<?php echo $reception_date ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Reception Time</label>
            <div class="controls">
                <input type="text" id="father" name="bride-father" value="<?php echo $reception_time ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Reception Address</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $address ?></textarea>
            </div>
        </div>
        <form action="<?php echo base_url('dashboard/invitation/edit/' . $id); ?>" method="post">
            <div class="control-group">
                <label class="control-label" for="bride-father">Invitation URL</label>
                <div class="controls">
                    <input type="text" id="father" name="url" value="<?php echo $url; ?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Change</button>
                </div>
            </div>
        </form>
    </div>
</div>