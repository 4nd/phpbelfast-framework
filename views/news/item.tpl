{extends file="layout.tpl"}
{block name="header"}
    {$post->title}
{/block}
{block name="content"}
        <article>
            <div class="image">
                <img src="{$post->image}" alt=""/>
            </div>

            <p class="date">{$post->date|date_format:"d M Y"}</p>
            <p class="summary">{$post->summary}</p>
        </article>
{/block}

