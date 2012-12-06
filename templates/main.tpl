{include file="header.tpl"}
<div class="navbar navbar-inverse">
     <div class="navbar-inner">
        <div class="container">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</a>
          	<div class="nav-collapse collapse">
            	<ul class="nav">
              		<li>
              			<a href="javascript:;" onclick="xajax_newCall();">New call</a>
              		</li>
              		<li><a href="javascript:;" onclick="xajax_showCall();">Show call</a></li>
              		<li><a href="javascript:;" onclick="xajax_deleteCall();">Delete call</a></li>
            	</ul>
          	</div><!--/.nav-collapse -->
        </div>
 	</div>
</div>    
<div id="container" name="container">
	{include file="middle.tpl"}
</div>
{include file="footer.tpl"}
