

@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div>

</div>
<div class="row" style="vertical-align:middle;">
    <div class="col-sm-4 body_title1">
        <span>Fast And Furious</span>
    </div>
    <div class="col-sm-8">
        <p class="body_text_position">Minister of state in the Prime Minister's Office, Jitendra Singh, on Tuesday, triggered a controversy after he pitched for a debate on BJP's stand demanding the repeal of Article 370 which guarantees special status for J&K.Singh, BJP MP from Udhampur in J&K, argued that the debate would<button type="button" id="dots" class="btn btn-link" onclick="More_text()" style="display:inline; color:#4B4B4B; text-decoration:none;"> ... Read More </button><span id="more" style="display:none"> help convince the "unconvinced" that the article had actually worked more to J&K's disadvantage. THIS STORY IS FROM MAY 28, 2014 What is Article 370? Three key pointsTNN | Updated: Aug 3, 2019, 18:47 IST What is Article 370?Omar Abdullah strongly objected to the minister's statement.NEW DELHI: Minister of state in the Prime Minister's Office, Jitendra Singh, on Tuesday, triggered a controversy after he pitched for a debate on BJP's stand demanding the repeal of Article 370 which guarantees special status for J&K.Singh, BJP MP from Udhampur in J&K, argued that the debate would help convince the "unconvinced" that the article</span><button type="button" id="article" class="btn btn-link" style="display:none; color:#4B4B4B; text-decoration:none;" onclick="new_page()"> ... full article</button><span id="full_article" style="display:none; text-decoration:none; color:#4B4B4B;"> had actually worked more to J&K's disadvantage.The minister's pitch was in line with the stand that Prime Minister Narendra Modi took while campaigning in J&K.Soon after, Jammu & Kashmir chief minister Omar Abdullah strongly objected to the minister's statement and tweeted, "So the new MOS PMO says process/discussions to revoke Art 370 have started. Wow, that was a quick beginning. Not sure who is talking."He went on to add, "Mark my words & save this tweet - long after Modi Govt is a distant memory either J&K won't be part of India or Art 370 will still exist."PDP chief Mehbooba Mufti also commented on the issue, adding that irresponsible utterances on Article 370 should be stopped as they could have serious repercussions in J&K.</span></p>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <p class="body_text_position">Minister of state in the Prime Minister's Office, Jitendra Singh, on Tuesday, triggered a controversy after he pitched for a debate on BJP's stand demanding the repeal of Article 370 which guarantees special status for J&K.Singh, BJP MP from Udhampur in J&K, argued that the debate would help convince the "unconvinced" that the article had actually worked more to J&K's disadvantage. THIS STORY IS FROM MAY 28, 2014 What is Article 370? Three key pointsTNN.</p>    
    </div>
    <div class="col-sm-4 body_title1">
        <span>Fast And Furious</span>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 body_title1"><span>Fast And Furious</span></div>
    <div class="col-sm-8"><br>
        <p class="body_text_position">Minister of state in the Prime Minister's Office, Jitendra Singh, on Tuesday, triggered a controversy after he pitched for a debate on BJP's stand demanding the repeal of Article 370 which guarantees special status for J&K.Singh, BJP MP from Udhampur in J&K, argued that the debate would help convince the "unconvinced" that the article had actually worked more to J&K's disadvantage. THIS STORY IS FROM MAY 28, 2014 What is Article 370? Three key pointsTNN.</p>
    </div>
</div>
<div class="body_row">
    <div class="body_pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
</div>

@stop
@extends('layouts.footer')


<script>
function More_text(){
    
    var dots = document.getElementById('dots');
    var moreText = document.getElementById('more');
    var article = document.getElementById('article');
    var full_article = document.getElementById('full_article');

    console.log(dots.style.display);
    if(dots.style['display']==="inline"){
        dots.style.display="none";
        more.style.display="inline";
        article.style.display="inline";
        full_article.style.display="none";
    }
}
function new_page(){
    window.location.href = '{{ URL::route("blog1") }}';
    
}
</script>
