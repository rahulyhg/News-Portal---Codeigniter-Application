<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Blog</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        <h3 style="color: yellowgreen; margin-left: 40px">
            <?php
            $message = $this->session->userdata('message');
            if ($message) {
                echo $message;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>


        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_blog" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input type="text" name="blog_title" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select category name</option>
                                <?php 
                                foreach ($all_published_category as $v_category){
                                ?>
                                <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_short_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_long_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Upload Image</label>
                        <div class="controls">
                            <input type="file" name="blog_image">
                            <span>
                                <?php
                                    $exception = $this->session->userdata('exception');
                                    if($exception){
                                        echo $exception;
                                        $this->session->unset_userdata('exception');
                                    }
                                ?>
                            </span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Publication Status </label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Blog</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->