<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>無標題文件</title>
    </head>
    <style>
	#mynetwork {
	  width: 1980px;
	  height: 1020px;
	  border: 1px solid lightgray;
	}
	</style>
    <script type="text/javascript" src="../Class/vis.js"></script>
   	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="networkJS.js"></script>
    <body>
    <form>
        ID、Name:<input type="text" id="search" />&nbsp;&nbsp;&nbsp;
        優先度搜尋:<select id="sel1">
        	<option value="All">All</option>
            <option value="Chemical">Chemical</option>
            <option value="Disease">Disease</option>
            <option value="Gene">Gene</option>
        </select>&nbsp;&nbsp;&nbsp;
        節點個數:<select id="sel2">
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" SELECTED>5</option>
        </select>&nbsp;&nbsp;&nbsp;
        <input type="button" value="search" onclick="get_value()"/>
    </form>
    <div id="mynetwork"></div>
    </body>
</html>
<?
	if(isset($_GET[_return]) && $_GET[_return] != NULL)
	{
		echo $_GET[_return];
		echo "<script>network('$_GET[_return]','All',5)</script>";
	}
?>