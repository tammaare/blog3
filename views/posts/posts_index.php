

<?foreach($posts as $post):?>
<div class="span8">
    <h1><?=$post['post_subject']?></h1>
    <p><?=$post['post_text']?></p>

        <div>
            <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
        <hr>
</div>

<h3>Adding pages</h3>
<p>For example, to To have the URL localhost/halo/<span class="label label-primary">posts/view/3</span> working:</p>


<?endforeach?>
