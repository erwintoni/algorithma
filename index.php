<?
require_once "header.php";

//white-list acceptable pages
$validpages = array('about', 'heapsort', 'gaussian', 'shaker', 'inOrder', 'recursivebinarytree', 'help', '234', 'AVL', 'redblack','postorder', 'preorder','bubble', 'insertion', 'merge','quick', 'binarytree', 'breadthfirst','depthfirst', 'seqsearch',
'criticalpath','dijkstra', 'kruskal', 'prim','deque', 'linkedlist', 'priorityq','q','stack','author','selection', 'heap');

$validauthor = array('simplesort', 'complexsort', 'basic');


if (in_array($_GET['page'], $validpages)) 
{
	if($_GET['page'] == 'author')
	{
		if (in_array($_GET['type'], $validauthor)) 
		{	
			$_GET['page'] = "author_".$_GET['type'];
		}
	}
    $loadpage = $_GET['page'];
}

if($loadpage)
{
	//typically bad practice, but the whitelist saves us.
	require_once "pages/".$loadpage.".php";
}
else
{
?>


<div id="background">
<div id="cont">

    <h2 align="center">Welcome to AlgorithmA 2011</h2>
<br />
<div class="sample">
	<div class="mask2">
		<div id="box2">
			<span><img src="images/DataStucts-Banner.png" alt="DataStuctures" /></span>
			<span><img src="images/Graph-Banner.png" alt="Graphs" /></span>

			<span><img src="images/Math-Banner.png" alt="MathAlgorithms" /></span>
			<span><img src="images/Recursion-Banner.png" alt="Recursion" /></span>			
			<span><img src="images/Search-Banner.png" alt="Search" /></span>
			<span><img src="images/Sort-Banner.png" alt="Sort" /></span>
			<span><img src="images/Tree-Banner.png" alt="Sort" /></span>
			<span><img src="images/AuthoringSystem-Banner.png" alt="Sort" /></span>
			<span><img src="images/CSUSB-Banner.png" alt="CSUSB" /></span>		</div>
	</div>

	<p class="buttons">
		<span id="prev1"><<</span>
		<span id="play1">></span>
		<span id="stop1">||</span>
		<span id="next1">>></span>
	</p>

</div>
<div class="mask1" style="height:20px;">
			<div id="box1">
		</div>
	</div>
    
    <p align="center">AlgorithmA is a website for Computer Science students to learn the foundations of computer programming. Algorithms and data structures are the framework of most software development cycles found in anything from word processor to your favorite games. AlgorithmA is a learning tool for students of the first two classes of the Computer Science B.S. and B.A. degree programs to help them understand how the mechanisms work in software and the development process.</p>
    
</div>

</div>


<?
}
require_once "footer.php";
?>

