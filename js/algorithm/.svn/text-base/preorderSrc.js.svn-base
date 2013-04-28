/*
	Name:		Carlos Maldonado, Matt Tonyan, Team (One/Two)
	Project:	{AlgorithmA}; 2011
	File:		preorderSrc.js
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
		Tip("Pre-Order Traversal- is an algorithm for traversing a tree, tree structure, or graph. One starts at the root and explores as far as possible along each left branch before backtracking and proceeding to the right branch. In Pre-Order Traversal, a node is visited before its children, once a child is found, the node checks to see if it has a child thus becoming the parent node. If the node does not have a child it backtracks, returning to the most original node and goes to the right node, it continues this cycle until it finally manages to access all the nodes.",WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
	}
	document.getElementById("howto").onmouseover = function() {
	Tip("<strong>Animate</strong> - Starts animation after a sequence of number has been entered<br />" + "<br /><strong>Forward</strong> - Will allow user to step through animation<br />" + "<br /><strong>Back</strong> - Will allow user to step through animation backward<br />" + "<br /><strong>Reset</strong> - Reset to the initial layout when first loaded<br />",WIDTH, 450, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '11pt',FONTCOLOR, '#FFFFFF',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#064e06');
	}
}

//Animation begins here

var manager = new jsAnimManager();

var counter = 1; // counter for pseudo code 

/*********************************************************
*	Function Name: 			animate
*	Function Description:   main animation
*********************************************************/

function animate(){

	shroom = document.getElementById("highlight");
	
	manager.registerPosition("highlight");
	
	//starts at 5 node
	shroom.setPosition(0,125);
	
	var anim = manager.createAnimObject("highlight");
	
	document.getElementById("highlight").style.visibility="visible";

	//10 node
	anim.add({property: Prop.position, to: new Pos(-169,218),
	duration: 2000});
	
	anim.add({property: Prop.wait, duration: 1000});
	
	//5node
	anim.add({property: Prop.position, to: new Pos(-255,293),
		duration: 2000});	
	
	anim.add({property: Prop.wait, duration: 1000});

	//15node
	anim.add({property: Prop.position, to: new Pos(-80,295),
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

function newline(newl,oldl) {
	document.getElementById(oldl).style.backgroundColor = "white";
	document.getElementById(newl).style.backgroundColor = "yellow";
}

/*********************************************************
*	Function Name: 			pseudoCode
*	Function Description:   highlights pseudo code during animation
*********************************************************/

function animPseudo() {
      var anim1 = manager.createAnimObject("l1"); //node 20
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim1.add({property: Prop.wait, duration: 1000});
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});  
   
   var anim2 = manager.createAnimObject("l2");//node 10
   anim2.add({property: Prop.wait, duration: 2000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim2.add({property: Prop.wait, duration: 1000});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});

   var anim3 = manager.createAnimObject("l1");
   anim3.add({property: Prop.wait, duration: 3000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim3.add({property: Prop.wait, duration: 1000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   
   var anim4 = manager.createAnimObject("l2"); //left node 5
   anim4.add({property: Prop.wait, duration: 5000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim4.add({property: Prop.wait, duration: 1000});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   var anim5 = manager.createAnimObject("l1"); 
   anim5.add({property: Prop.wait, duration: 6000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim5.add({property: Prop.wait, duration: 1000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});  

   var anim6 = manager.createAnimObject("l3");
   anim6.add({property: Prop.wait, duration: 8000}); //right node 15
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim6.add({property: Prop.wait, duration: 1000});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});

   var anim7 = manager.createAnimObject("l1");
   anim7.add({property: Prop.wait, duration: 10000});
   anim7.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim7.add({property: Prop.wait, duration: 1000});
   anim7.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});


   var anim8 = manager.createAnimObject("l3"); //right node 30
   anim8.add({property: Prop.wait, duration: 11000});
   anim8.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim8.add({property: Prop.wait, duration: 1000});
   anim8.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   var anim9 = manager.createAnimObject("l1");
   anim9.add({property: Prop.wait, duration: 13000});
   anim9.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim9.add({property: Prop.wait, duration: 1000});
   anim9.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   var anim10 = manager.createAnimObject("l2");
   anim10.add({property: Prop.wait, duration: 14000}); //left node 25
   anim10.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim10.add({property: Prop.wait, duration: 1000});
   anim10.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});

   var anim11 = manager.createAnimObject("l1");
   anim11.add({property: Prop.wait, duration: 15000});
   anim11.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim11.add({property: Prop.wait, duration: 1000});
   anim11.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});

   var anim12 = manager.createAnimObject("l3"); //right node 35
   anim12.add({property: Prop.wait, duration: 17000});
   anim12.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim12.add({property: Prop.wait, duration: 500});
   anim12.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   var anim13 = manager.createAnimObject("l1");
   anim13.add({property: Prop.wait, duration: 18000});
   anim13.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:500});
   anim13.add({property: Prop.wait, duration: 1000});
   anim13.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   var anim14 = manager.createAnimObject("l4");
   anim14.add({property: Prop.wait, duration: 19000});
   anim14.add({property: Prop.backgroundColor, to: new Col(255,0,0), duration:500});
   anim14.add({property: Prop.wait, duration: 5000});
   anim14.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:500});
   
   /*
   var anim1 = manager.createAnimObject("l1"); //node 20
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim1.add({property: Prop.wait, duration: 250});
   anim1.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});  
   
   var anim2 = manager.createAnimObject("l2");
   anim2.add({property: Prop.wait, duration: 500});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim2.add({property: Prop.wait, duration: 750});
   anim2.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim3 = manager.createAnimObject("l4");
   anim3.add({property: Prop.wait, duration: 1000});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim3.add({property: Prop.wait, duration: 1250});
   anim3.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   
   var anim4 = manager.createAnimObject("l5"); //left node 10
   anim4.add({property: Prop.wait, duration: 1500});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim4.add({property: Prop.wait, duration: 1750});
   anim4.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim5 = manager.createAnimObject("l1"); 
   anim5.add({property: Prop.wait, duration: 2000});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim5.add({property: Prop.wait, duration: 2250});
   anim5.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});  

   var anim6 = manager.createAnimObject("l2");
   anim6.add({property: Prop.wait, duration: 2500});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim6.add({property: Prop.wait, duration: 2750});
   anim6.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim7 = manager.createAnimObject("l4");
   anim7.add({property: Prop.wait, duration: 3000});
   anim7.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim7.add({property: Prop.wait, duration: 3250});
   anim7.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});


   var anim8 = manager.createAnimObject("l5"); //left node 5
   anim8.add({property: Prop.wait, duration: 3500});
   anim8.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim8.add({property: Prop.wait, duration: 3750});
   anim8.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim9 = manager.createAnimObject("l1");
   anim9.add({property: Prop.wait, duration: 4000});
   anim9.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim9.add({property: Prop.wait, duration: 4250});
   anim9.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim10 = manager.createAnimObject("l2");
   anim10.add({property: Prop.wait, duration: 4500});
   anim10.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim10.add({property: Prop.wait, duration: 4750});
   anim10.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});

   var anim11 = manager.createAnimObject("l4");
   anim11.add({property: Prop.wait, duration: 5000});
   anim11.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim11.add({property: Prop.wait, duration: 5250});
   anim11.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim12 = manager.createAnimObject("l5");
   anim12.add({property: Prop.wait, duration: 5500});
   anim12.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim12.add({property: Prop.wait, duration: 5750});
   anim12.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   

   var anim13 = manager.createAnimObject("l7"); //right node 15
   anim13.add({property: Prop.wait, duration: 6000});
   anim13.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim13.add({property: Prop.wait, duration: 6250});
   anim13.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim14 = manager.createAnimObject("l1");
   anim14.add({property: Prop.wait, duration: 6500});
   anim14.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim14.add({property: Prop.wait, duration: 6750});
   anim14.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim15 = manager.createAnimObject("l2");
   anim15.add({property: Prop.wait, duration: 400});
   anim15.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim15.add({property: Prop.wait, duration: 400});
   anim16.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim16 = manager.createAnimObject("l4");
   anim16.add({property: Prop.wait, duration: 400});
   anim16.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim16.add({property: Prop.wait, duration: 400});
   anim16.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim17 = manager.createAnimObject("l5");
   anim17.add({property: Prop.wait, duration: 400});
   anim17.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim17.add({property: Prop.wait, duration: 400});
   anim17.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});


   var anim18 = manager.createAnimObject("l7"); //right node 15
   anim18.add({property: Prop.wait, duration: 400});
   anim18.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim18.add({property: Prop.wait, duration: 400});
   anim18.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim19 = manager.createAnimObject("l1");
   anim19.add({property: Prop.wait, duration: 400});
   anim19.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim19.add({property: Prop.wait, duration: 400});
   anim19.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim20 = manager.createAnimObject("l2");
   anim20.add({property: Prop.wait, duration: 400});
   anim20.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim20.add({property: Prop.wait, duration: 400});
   anim20.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim21 = manager.createAnimObject("l4");
   anim21.add({property: Prop.wait, duration: 400});
   anim21.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim21.add({property: Prop.wait, duration: 400});
   anim21.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim22 = manager.createAnimObject("l5");
   anim22.add({property: Prop.wait, duration: 400});
   anim22.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim22.add({property: Prop.wait, duration: 400});
   anim22.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});


   var anim23 = manager.createAnimObject("l7"); //right node 30
   anim23.add({property: Prop.wait, duration: 400});
   anim23.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim23.add({property: Prop.wait, duration: 400});
   anim23.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim24 = manager.createAnimObject("l1"); 
   anim24.add({property: Prop.wait, duration: 1000});
   anim24.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim24.add({property: Prop.wait, duration: 500});
   anim24.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});  

   var anim25 = manager.createAnimObject("l2");
   anim25.add({property: Prop.wait, duration: 500});
   anim25.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim25.add({property: Prop.wait, duration: 500});
   anim25.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim26 = manager.createAnimObject("l4");
   anim26.add({property: Prop.wait, duration: 500});
   anim26.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim26.add({property: Prop.wait, duration: 500});
   anim26.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   
   var anim27 = manager.createAnimObject("l5"); //left node 25
   anim27.add({property: Prop.wait, duration: 500});
   anim27.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim27.add({property: Prop.wait, duration: 500});
   anim27.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim28 = manager.createAnimObject("l1");
   anim28.add({property: Prop.wait, duration: 1000});
   anim28.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim28.add({property: Prop.wait, duration: 400});
   anim28.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim29 = manager.createAnimObject("l2");
   anim29.add({property: Prop.wait, duration: 400});
   anim29.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim29.add({property: Prop.wait, duration: 400});
   anim29.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});

   var anim30 = manager.createAnimObject("l4");
   anim29.add({property: Prop.wait, duration: 400});
   anim29.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim29.add({property: Prop.wait, duration: 400});
   anim29.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim31 = manager.createAnimObject("l5");
   anim31.add({property: Prop.wait, duration: 400});
   anim31.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim31.add({property: Prop.wait, duration: 400});
   anim31.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});


   var anim32 = manager.createAnimObject("l7"); //right node 35
   anim32.add({property: Prop.wait, duration: 400});
   anim32.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim32.add({property: Prop.wait, duration: 400});
   anim32.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});

   var anim33 = manager.createAnimObject("l1");
   anim33.add({property: Prop.wait, duration: 1000});
   anim33.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim33.add({property: Prop.wait, duration: 500});
   anim33.add({property: Prop.backgroundColor, to: new Col(255,255,255), duration:250});
   
   var anim34 = manager.createAnimObject("l2");
   anim34.add({property: Prop.wait, duration: 500});
   anim34.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});
   anim34.add({property: Prop.wait, duration: 500});
   anim34.add({property: Prop.backgroundColor, to: new Col(255,255,0), duration:250});

   var anim35 = manager.createAnimObject("l3"); //return
   anim35.add({property: Prop.wait, duration: 500});
   anim35.add({property: Prop.backgroundColor, to: new Col(255,0,0), duration:1000});
*/
}

/*function pseudoCode()
{		
		
		if(counter ==1)
		{
			//highlight first line in red
			setTimeout("document.getElementById('l1').style.backgroundColor = 'red'" , 1000);			
			counter++; 
			return; 
		}
				
		if(counter ==2)
		{
			//unhighlight first line and then highlight second line
			setTimeout("newline('l2','l1')", 2000);
			counter++;
			return; 
		}

		if(counter ==3)
		{			
	  		//unhighlight seventh line and then highlight fourth line
			setTimeout("newline('l4','l2')", 3000);
			//setTimeout(function(){
			//document.getElementById("l2").style.backgroundColor = "white";
			//document.getElementById("l4").style.backgroundColor = "yellow";
			//}, 1000);
			counter++;
			return;
		}
			
		if (counter ==4)
		{
			setTimeout("newline('l5','l4')", 4000);
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l5").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

//NODE 10
		if(counter ==5)
		{
			//highlight first line in red
			setTimeout("newline('l2','l1')", 5000);
			document.getElementById("l5").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==6)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==7)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l4").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
			
		if (counter ==8)
		{
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l5").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
//NODE 5
		if(counter ==9)
		{
			//highlight first line in red
			document.getElementById("l5").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==10)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==11)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l4").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
			
		if (counter ==12)
		{
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l6").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

		if (counter ==13)
		{
			setTimeout(function(){
			document.getElementById("l6").style.backgroundColor = "white";
			document.getElementById("l7").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
//NODE 15

		if(counter ==13)
		{
			//highlight first line in red
			document.getElementById("l7").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==14)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==15)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l4").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
			
		if (counter ==16)
		{
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l6").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

		if (counter ==17)
		{
			setTimeout(function(){
			document.getElementById("l6").style.backgroundColor = "white";
			document.getElementById("l7").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

//NODE 30

		if(counter ==18)
		{
			//highlight first line in red
			document.getElementById("l7").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==19)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==20)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l4").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
			
		if (counter ==21)
		{
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l5").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

//NODE 25

		if(counter ==22)
		{
			//highlight first line in red
			document.getElementById("l5").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==23)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==24)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l4").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}
			
		if (counter ==25)
		{
			setTimeout(function(){
			document.getElementById("l4").style.backgroundColor = "white";
			document.getElementById("l6").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

		if (counter ==26)
		{
			setTimeout(function(){
			document.getElementById("l6").style.backgroundColor = "white";
			document.getElementById("l7").style.backgroundColor = "yellow";
			}, 1000);
			counter++;
			return;
		}

//NODE 35


		if(counter ==27)
		{
			//highlight first line in red
			document.getElementById("l7").style.backgroundColor = "white";
			document.getElementById("l1").style.backgroundColor = "red";
			counter++; 
			return; 
		}
				
		if(counter ==28)
		{
			//unhighlight first line and then highlight second line
			document.getElementById("l1").style.backgroundColor = "white";
			document.getElementById("l2").style.backgroundColor = "yellow"; 
			counter++;
			return; 
		}

		if(counter ==29)
		{			
	  		//unhighlight second line and then highlight fourth line
			setTimeout(function(){
			document.getElementById("l2").style.backgroundColor = "white";
			document.getElementById("l3").style.backgroundColor = "red";
			}, 1000);
			counter++;
			return;
		}

//NODE 20

			
	//}

}
*/
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



/*	 
	 if(Tree[top][node] == value)
	 { //highlight return integer signifying value has been found
	 	document.getElementById("l3").style.backgroundColor = "yellow";
		document.getElementById("l1").style.backgroundColor = "white"; 
		 
		for(var it = 4; it<=8; it++)//cleans up other lines that maybe highlighted
		{
			document.getElementById("l"+it).style.backgroundColor = "white"; 
		}
		 
		return; 
	}

	else

	{

		document.getElementById("l3").style.backgroundColor = "white";
*/	
