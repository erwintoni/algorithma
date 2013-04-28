/*
	Name:		Student One, Student Two, Team (One/Two)
	Project:	{AlgorithmA}; 2011
	File:		postOrder.js
	Created:	2010.02.21

	Modified By:	Student Name, Team (One/Two)
	Modified:	2010.03.16
	
	Commented By:	Christopher Huerta, Documentation Team
	Commented:	2011.03.16
*/

// JavaScript Document


function Initialize()
{
	/* REQUIRED */
	// Sets up your Concept and How-To buttons.
	document.getElementById("concept").onmouseover = function () {
		Tip("A Binary Tree is a tree data structure in which each node has at most two children.  Typically, the first node is known as the parent and the child nodes are called left and right.  Binary trees commonly used to implement binary search trees and binary heaps.  Every left node has a value less than or equal to its parent node and every right node has a value greater than or equal to its parent.  A new node is always added as a leaf, following the specified rule above.  Post order Traversal Binary Search is when a binary tree is searched from the bottom left node first and is continued from bottom to the top of the left node.  Then is moved to the bottom of the right node node and moves up checking to the top of that node.  Then the center or parent node is finally checked last.",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
	}
	document.getElementById("howto").onmouseover = function() {
	Tip("<strong>Animate</strong> - Starts animation after a sequence of number has been entered<br />" + "<br /><strong>Step</strong> - Will allow user to pause through animation<br />" + "<br /><strong>Previous</strong> - Will allow user to step through animation backward one step at a time<br />" + "<br /><strong>Reset</strong> - Reset to the initial layout when first loaded<br />",WIDTH, 450, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
	}
}

//Animation begins here

var manager = new jsAnimManager();

function Res ()
{
	document.getElementById("s1").enabled = true;
	document.getElementById("f1").enabled = true;
	document.getElementById("b1").enabled = false;
}

function animate(){

	shroom = document.getElementById("highlight");
	
	manager.registerPosition("highlight");
	
	//starts at 5 node
	shroom.setPosition(-240,293);
	
	var anim = manager.createAnimObject("highlight");
	
	document.getElementById("highlight").style.visibility="visible";
	
	//15node
	anim.add({property: Prop.position, to: new Pos(-80,295),
		duration: 2000});	
	
	anim.add({property: Prop.wait, duration: 1000});	

	//10 node
	anim.add({property: Prop.position, to: new Pos(-169,218),
	duration: 2000});	
	
	anim.add({property: Prop.wait, duration: 1000});

	//25 node	
	anim.add({property: Prop.position, to: new Pos(60,282),
	duration: 2000});
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//35 node
	anim.add({property: Prop.position, to: new Pos(250,282),
	duration: 2000});
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//30 node
	anim.add({property: Prop.position, to: new Pos(156,215),
	duration: 2000});
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//For 20 root	
	anim.add({property: Prop.position, to: new Pos(0,125),
	duration: 2000});	
	
}

//End of animation


//Start of buttons controls fuctions
function pause(){
	manager.pause()
}

function resumeAnim(){
	manager.resume()
}

function resetAnim(){
	manager.kill();
}


function animPseudo() {
   
   var anim1 = manager.createAnimObject("pseudo2"); //left node 5
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:100});
   anim1.add({property: Prop.wait, duration: 1000});
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});  
   
   
   var anim2 = manager.createAnimObject("pseudo3");// right  node 15
   anim2.add({property: Prop.wait, duration: 1000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim2.add({property: Prop.wait, duration: 1000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});

   
   var anim3 = manager.createAnimObject("pseudo4");//root node 10
   anim3.add({property: Prop.wait, duration: 4000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1050});
   anim3.add({property: Prop.wait, duration: 1000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   var anim4 = manager.createAnimObject("pseudo2"); //left node 25
   anim4.add({property: Prop.wait, duration: 7000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim4.add({property: Prop.wait, duration: 1000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   var anim5 = manager.createAnimObject("pseudo3");// right node 35
   anim5.add({property: Prop.wait, duration: 10000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim5.add({property: Prop.wait, duration: 1000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   var anim6 = manager.createAnimObject("pseudo4");//root node 30 and 20
   anim6.add({property: Prop.wait, duration: 12000});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim6.add({property: Prop.wait, duration: 1000});


}


    

