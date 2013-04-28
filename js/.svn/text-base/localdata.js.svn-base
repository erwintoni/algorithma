/*
	Name:		Student Name
	Project:		{AlgorithmA}; 2010
	File:		localdata.js
	Created:		20XX.XX.XX

	Modified By:	Student Name
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
*/

var terms = ["Authoring System", "Deque", "Huffman Code", "Pattern Racing", "RSA Encryption", "Heap", "Linked List", "Priority Queue", "Queue", "Stack", "Knapsack", "Critical Path", "Dijkstra's Algorithm", "Kruskal's Algorithm", "Network Flow", "Prim's Algorithm", "Gaussian Elimination", "Integration", "Least Squares", "Spline Interpolation", "Boyer-Moore", "Brute Force", "Knuth-Morris-Pratt", "Rabin-Karp", "Alphabeta", "Binary Search Tree", "Factorial", "Fibonacci", "In-Order Traversal", "Maze Problem", "Post-Order", "Pre-Order", "Ruler", "Star Fractal", "Towers of Hanoi", "Binary Tree", "Breadth First", "Depth First", "Sequential Search", "Bubble", "Hash", "Heap Sort", "Insertion", "Merge", "Quick", "Radix", "Sort Racing", "Comb", "2-3-4 Tree", "AVL Tree", "B-Tree", "M-Way Tree", "Red-Black Tree"];


//tab function
$(document).ready(function() {
  
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {
	$("ul.tabs li").removeClass("active"); //Remove any "active" class
	$(this).addClass("active"); //Add "active" class to selected tab
	$(".tab_content").hide(); //Hide all tab content
	var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
	$(activeTab).fadeIn(); //Fade in the active content
	return false;
	});
 
});
