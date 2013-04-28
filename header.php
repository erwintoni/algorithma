<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>(AlgorithmA); 2011</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />



	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
	<script type="text/javascript" src="js/localdata.js"></script>
	
	<script type="text/javascript" src="js/jsAnim.js"></script>
	<script type="text/javascript" src="js/pbMan.js"></script>
	

		
<?

switch ($_GET['page']) {

case "heapsort":

        print <<<EOF
        <link rel="stylesheet" type="text/css" href="css/algorithm/heapsortStyle.css" />
        <script type="text/javascript" src="js/algorithm/heapsortSrc.js"></script>
        <link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

case "gaussian":
        print <<<EOF
        <link rel="stylesheet" type="text/css" href="css/algorithm/gaussianStyle.css" />
        <script type="text/javascript" src="js/algorithm/gaussianSrc.js"></script>
        <link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

case "shaker":
        print <<<EOF
        <link rel="stylesheet" type="text/css" href="css/algorithm/shakerStyle.css" />
        <script type="text/javascript" src="js/algorithm/shakerSrc.js"></script>
        <link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "test":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/testStyle.css" />
	<script type="text/javascript" src="js/algorithm/testSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "heap":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/heapStyle.css" />
	<script type="text/javascript" src="js/algorithm/heapSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

 case "inOrder":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/inOrder.css" />
	<script type="text/javascript" src="js/algorithm/inOrder.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

 case "recursivebinarytree":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/binarytreeStyle.css" />
	<script type="text/javascript" src="js/algorithm/recursivebinarytreeSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "bubble":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/bubbleStyle.css" />
	<script type="text/javascript" src="js/algorithm/bubbleSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />

EOF;
        break;
     
    case "binarytree":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/binarytreeStyle.css" />
	<script type="text/javascript" src="js/algorithm/binarytreeSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
	case "selection":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/selectionStyle.css" />
	<script type="text/javascript" src="js/algorithm/selectionSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "postorder":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/postOrderStyle.css" />
	<script type="text/javascript" src="js/algorithm/postOrder.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "preorder":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/preorderStyle.css" />
	<script type="text/javascript" src="js/algorithm/preorderSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    
    case "quick":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/quickStyle.css" />
	<script type="text/javascript" src="js/algorithm/quickSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "234":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/2-3-4Style.css" />
	<script type="text/javascript" src="js/algorithm/2-3-4Src.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    case "redblack":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/redblackStyle.css" />
	<script type="text/javascript" src="js/algorithm/redblackSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    case "AVL":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/avlStyle.css" />
	<script type="text/javascript" src="js/algorithm/avlSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    case "breadthfirst":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/breadthfirstStyle.css" />
	<script type="text/javascript" src="js/algorithm/breadthfirstSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    case "depthfirst":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/depthfirstStyle.css" />
	<script type="text/javascript" src="js/algorithm/depthfirstSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "seqsearch":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/sequentialStyle.css" />
	<script type="text/javascript" src="js/algorithm/sequentialSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "merge":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/mergeStyle.css" />
	<script type="text/javascript" src="js/algorithm/mergeSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;
    case "insertion":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/insertionStyle.css" />
	<script type="text/javascript" src="js/algorithm/insertionSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
	break;
    case "criticalpath":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/criticalpathStyle.css" />
	<script type="text/javascript" src="js/algorithm/criticalpathSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "dijkstra":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/dijkstrasStyle.css" />
	<script type="text/javascript" src="js/algorithm/dijkstrasSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "kruskal":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/kruskalsStyle.css" />
	<script type="text/javascript" src="js/algorithm/kruskalsSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "prim":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/primsStyle.css" />
	<script type="text/javascript" src="js/algorithm/primsSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "deque":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/dequeStyle.css" />
	<script type="text/javascript" src="js/algorithm/dequeSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "linkedlist":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/linkedlistStyle.css" />
	<script type="text/javascript" src="js/algorithm/linkedlistSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "priorityq":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/priorityqueueStyle.css" />
	<script type="text/javascript" src="js/algorithm/priorityqueueSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "q":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/queueStyle.css" />
	<script type="text/javascript" src="js/algorithm/queueSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "stack":
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/stackStyle.css" />
	<script type="text/javascript" src="js/algorithm/stackSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
        break;

    case "author":
	if($_GET['type']=='simplesort')
	{
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/authorSimpleStyle.css" />
	<script type="text/javascript" src="js/algorithm/authorSimpleSrc.js"></script>
	<script type="text/javascript" src="js/pseudoToJs.js"></script>
	<script type="text/javascript" src="js/cppToJs.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
	}
	else if($_GET['type']=='complexsort')
	{
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/authorComplexStyle.css" />
	<script type="text/javascript" src="js/algorithm/authorComplexSrc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
	}
	else if($_GET['type']=='basic')
	{
        print <<<EOF
	<link rel="stylesheet" type="text/css" href="css/algorithm/authorBasicStyle.css" />
	<script type="text/javascript" src="js/algorithm/authorBasicSrc.js"></script>
	<script type="text/javascript" src="js/pseudoToJs.js"></script>
	<script type="text/javascript" src="js/cppToJs.js"></script>
	<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css" />
EOF;
	}
        break;
	default:
        print <<<EOF
 

<script type="text/javascript" src="js/_mootools.js"></script>
<script type="text/javascript" src="js/_class.noobSlide.js"></script>
<script type="text/javascript" src="js/function.js"></script>

	<link rel="stylesheet" type="text/css" href="css/homeStyle.css" />
EOF;
		break;
}
?>

</head>

<body onload="Initialize()">
<script type="text/javascript" src="js/wz_tooltip.js"></script>

             
            <!-- =====Start Navigation Header=====-->    
	<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0"> 
	  <tr> 
	    <td height="85" class="BKG_Blue"><center><a href="index.php"><img src="images/Algorithma-A3-Final.jpg" alt="AlgorithmA 2011" /></a></center></td> 
	  </tr> 
	  <tr> 
	    <td id='centerer'> 
	      <div id="myslidemenu" class="jqueryslidemenu"> 
                    <ul>
                    	<li><a href="index.php">Home</a></li>
                    	
                        <li><a href="#">Data Structures</a>
                          <ul>
                          <li><a href="index.php?page=deque">Deque</a></li>
                          <li><a href="index.php?page=linkedlist">Linked List</a></li>
                          <li><a href="index.php?page=priorityq">Priority Queue</a></li>
                          <li><a href="index.php?page=q">Queue</a></li>                    
                          <li><a href="index.php?page=stack">Stack</a></li>
                          <li><a href="index.php?page=heap">Heap</a></li>
                          </ul>
                        </li>
                        
                        <li><a href="#">Graph</a>
                          <ul>
                          <li><a href="index.php?page=criticalpath">Critical Path</a></li>
                          <li><a href="index.php?page=dijkstra">Dijkstra's Algorithm</a></li>
                          <li><a href="index.php?page=kruskal">Kruskal's Algorithm</a></li>
                          <li><a href="index.php?page=prim">Prim's Algorithm</a></li>
<!--                          <li><span>Network Flow<font size="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                        
                        <li><a href="#">Math Algorithms</a>
                          <ul>
                          <li><a href="index.php?page=gaussian">Gaussian Elimination</a></li>
<!--                          <li><span>Integration<font size="1">(Coming Soon)</font></span></li>                    
                          <li><span>Least Squares<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Spline Interpolatione<font size="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                        
<!--                        <li><a href="#">Pattern Matching</a>
                          <ul>
                    
                          <li><span>Boyer-Moore<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Brute Force<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Knuth-Morris-Pratt<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Pattern Racing<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Rabin-Karp<font size="1">(Coming Soon)</font></span></li>
                    
                          </ul>
                        </li>-->
                        
                        <li><a href="#">Recursion</a>
                          <ul>
<!--                          <li><span>Alphabeta<font size="1">(Coming Soon)</font></span></li>-->
                          <li><a href="index.php?page=recursivebinarytree">Binary Search Tree</a></li>
<!--                          <li><span>Factorial<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Fibonacci<font size="1">(Coming Soon)</font></span></li>-->
                          <li><a href="index.php?page=inOrder">In-Order Traversal</a></li>
<!--                          <li><span>Maze Problem<font size="1">(Coming Soon)</font></span></li>-->
                          <li><a href="index.php?page=postorder">Post-Order Traversal</a></li>
                          <li><a href="index.php?page=preorder">Pre-Order Traversal</a></li>
<!--                          <li><span>Ruler<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Star Fractal<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Towers of Hanoi<font size="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                        
                        <li><a href="#">Search</a>
                          <ul>
                         <li><a href="index.php?page=binarytree">Binary Tree</a></li>
	 					 <li><a href="index.php?page=breadthfirst">Breadth First</a></li>
	 					 <li><a href="index.php?page=depthfirst">Depth First</a></li>
	 					 <li><a href="index.php?page=seqsearch">Sequential Search</a></li>
<!--	 					 <li><span>Hash<font siz="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                    
                        <li><a href="#">Sort</a>
                          <ul>
                         	<li><a href="index.php?page=bubble">Bubble</a></li>
	 					 	<li><a href="index.php?page=insertion">Insertion</a></li>
							<li><a href="index.php?page=selection">Selection</a></li>
						 	<li><a href="index.php?page=merge">Merge</a></li>
	  						<li><a href="index.php?page=quick">Quick</a></li>
 						    <li><a href="index.php?page=heapsort">Heap</a></li>
	  						<!--<li><span>Radix<font size="1">(Coming Soon)</font></span></li>-->
	  						<li><a href="index.php?page=shaker">Shaker</a></li>
                          </ul>
                        </li>
                        
                        <li><a href="#">Tree</a>
                          <ul>
                          <li><a href="index.php?page=234">2-3-4</a></li>
                          <li><a href="index.php?page=AVL">AVL</a></li>
                          <li><a href="index.php?page=redblack">Red-Black</a></li>
<!--                          <li><span>B-Tree<font size="1">(Coming Soon)</font></span></li>
                          <li><span>M-Way<font size="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                        
                        <li><a href="#">Authoring System</a>
                          <ul>
                          <li><a href="index.php?page=author&type=simplesort">Simple Sorts</a></li>
                          <li><a href="index.php?page=author&type=basic">Basic Constructs</a></li>
                          <li><a href="index.php?page=author&type=complexsort">Array-Intensive Sorts</a></li>

<!--                          <li><span>Compression:  Huffman Code<font size="1">(Coming Soon)</font></span></li>
                          <li><span>RSA Encryption<font size="1">(Coming Soon)</font></span></li>
                          <li><span>Optimization: Knapsack<font size="1">(Coming Soon)</font></span></li>-->
                          </ul>
                        </li>
                    
                    </ul>
                                  
	<br style="clear: left"/> 
 
	      </div> 
	    </td> 
	  </tr> 
	</table> 

	<!--
	=====End Navigation Header / Start Main Body=====
	-->
