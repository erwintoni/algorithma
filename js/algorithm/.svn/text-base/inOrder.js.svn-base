/*
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		nameofalgorithm.js
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
	This is a template file for js animation.
 If there is a simular animation to the 
 Algorithm animation you are working on
 you might want to take a look or even copy code
 
 You will also need the pesudo code for the animation.
 Please look at other code to figure out how to program 
 this as while.
 
 images will be images/algorithm/nameofalgorithm/images.png
 
 This file should be nameofalgorithm.js
 
 Also this file should be kept in /js/algorithm/nameofalgorithm.js*			
 Also please add names so we know who coded what.
*/

// JavaScript Document


function Initialize()
{
	/* REQUIRED */
	// Sets up your Concept and How-To buttons.
	document.getElementById("concept").onmouseover = function () {
		Tip("In-Order Traversal- is an algorithm for traversing a tree, tree structure, or graph. One starts at the root and explores as far as possible along each left branch before backtracking and proceeding to the right branch. In-Order Traversal uses LNR, which means that we always travel to the node's left child first (if it has one), then visit the node itself, then travel to its right child (if it has one) before returning to the parent, this cycle repeats until it finally manages to visit all the nodes in the tree.",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF', PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
	}
	document.getElementById("howto").onmouseover = function() {
	Tip("<strong>Animate</strong> - Starts animation after a sequence of number has been entered<br />" + "<br /><strong>Pause</strong> - Pauses the animation on screen<br />" + "<br /><strong>resume</strong> - Resumes the animation<br />" + "<br /><strong>Reset</strong> - Reset to the initial layout when first loaded<br />",WIDTH, 450, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
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
	
	//10 node
	anim.add({property: Prop.position, to: new Pos(-169,218),
	duration: 2000});	
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//15node
	anim.add({property: Prop.position, to: new Pos(-80,295),
		duration: 2000});	
	
	anim.add({property: Prop.wait, duration: 1000});	

	//For 20 root	
	anim.add({property: Prop.position, to: new Pos(0,125),
	duration: 2000});
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//30 node
	anim.add({property: Prop.position, to: new Pos(156,215),
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
   
    var anim3 = manager.createAnimObject("pseudo4");//root node 10
   anim3.add({property: Prop.wait, duration: 4000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1050});
   anim3.add({property: Prop.wait, duration: 1000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   var anim2 = manager.createAnimObject("pseudo3");// right  node 15
   anim2.add({property: Prop.wait, duration: 1000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim2.add({property: Prop.wait, duration: 1000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   //var anim6 = manager.createAnimObject("pseudo4");//root node 30 and 20
   //anim6.add({property: Prop.wait, duration: 12000});
   //anim6.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   //anim6.add({property: Prop.wait, duration: 1000});
   
   
   var anim4 = manager.createAnimObject("pseudo3"); //root
   anim4.add({property: Prop.wait, duration: 7000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:3000});
   anim4.add({property: Prop.wait, duration: 1000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000});
   
   
   var anim5 = manager.createAnimObject("pseudo2");// right node 35
   anim5.add({property: Prop.wait, duration: 12000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim5.add({property: Prop.wait, duration: 1000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000}); 
   
   
   var anim6 = manager.createAnimObject("pseudo4");// right node 35
   anim6.add({property: Prop.wait, duration: 16000});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:1000});
   anim6.add({property: Prop.wait, duration: 1000});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:1000}); 


}

