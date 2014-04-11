{extends file="layout.tpl"}
{block name="header"}
    POSTS
{/block}
{block name="content"}
    {foreach $posts as $post}
        <article>
            <div class="image">
                <img src="{$post->image}" alt=""/>
            </div>
            <h2><a href="{urlFor name="post-item" options=['id' => $post->id]}">{$post->title}</a></h2>

            <p class="date">{$post->date|date_format:"d M Y"}</p>
        </article>
    {/foreach}
{/block}

