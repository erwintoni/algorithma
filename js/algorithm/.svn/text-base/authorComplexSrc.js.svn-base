var manager = new jsAnimManager(40); // Manager for js Animation, 40 means number of frames per second. Default is 40 if not specified
var playback = new pbManager ( );
//Called on HTML load, Draws everything on the screen

/*********NOTE**********
The highlighting has been disabled for the presentation, but should be re-enabled before the final release.
To re-enable, find the function below in the code:
function highlightadd(str)
{
	naMoves.push('Highlight('+str+');');
}

You'll find that "naMoves.push('Highlight('+str+');');" is commented out. Just de-comment it.

**************************/

var unsorted = [7, 8, 3, 4, 6, 5, 1, 2, 0, 9];
var naMoves = new Array;
var elemInfo = new Array(10);
var elemInfoStatic = new Array(10);
var elemSpacerInfo = new Array(9);
var openSpots = new Array(10);
var openHomeSpots = new Array(10);
var runThis = "";
var totalLines;

shuffle = function(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
};

function presets(pre) {
	var mergepre = 'vector<int> mergeSort(vector<int> vec) \n\
{ \n\
	if (vec.size() < 2) \n\
	{ \n\
		return vec; \n\
	} \n\
	int middle = int(vec.size() / 2); \n\
	vector<int> left; \n\
	vector<int> right; \n\
	left.assign(vec, vec+middle); \n\
	right.assign(vec+middle, vec+vec.size()); \n\
	return merge(mergeSort(left), mergeSort(right)); \n\
} \n\
vector<int> merge(vector<int> left, vector<int> right) \n\
{ \n\
	vector<int> result; \n\
	while (left.size() && right.size())  \n\
	{ \n\
		if (left[0] <= right[0])  \n\
		{ \n\
			int ele = left[0]; \n\
			left.erase(left.begin()); \n\
			result.push_back(ele); \n\
		}  \n\
		else  \n\
		{ \n\
			int ele = right[0]; \n\
			right.erase(right.begin()); \n\
			result.push_back(ele); \n\
		} \n\
	} \n\
	while (left.size()) \n\
	{ \n\
		int ele = left[0]; \n\
		left.erase(left.begin()); \n\
		result.push_back(ele); \n\
	} \n\
	while (right.size()) \n\
	{ \n\
		int ele = right[0]; \n\
		right.erase(right.begin()); \n\
		result.push_back(ele); \n\
	} \n\
	return result; \n\
}';


	switch(pre) {
		case 'merge':
			document.getElementById('codeinput').value = mergepre;
			break;
		default:
	}
}

function animtype(type) {

	switch(type) {
		case 'simplesort':
    			window.location = "index.php?page=author&type=simplesort"
			break;
		case 'complexsort':
    			window.location = "index.php?page=author&type=complexsort"
			break;
		case 'basic':
    			window.location = "index.php?page=author&type=basic"
			break;
		default:
	}

}

function getInput()
{
	inputCode = document.getElementById('codeinput').value;
	var virginInput = inputCode;
	inputCode = c2jConvert(inputCode);
	//inputCode = varAdd_convert(inputCode);
	alert('Code loaded. Click Demo to run animation');
	setButtonEnable('start',1);
	setButtonEnable('stop',1);
	document.getElementById('codeinput').style.display = "none";
	allLines = virginInput.split('\n');
	totalLines = allLines.length;
	var hlcode = "";
	for (var i = 0; i < allLines.length; i++)
	{
		allLines[i] = allLines[i].replace(/</g, '&lt;'); 
		allLines[i] = allLines[i].replace(/>/g, '&gt;'); 
		hlcode += "<div id='psuedoCode"+i+"'><pre>"+allLines[i]+"</pre></div>";
	}
	document.getElementById('tab1').innerHTML = hlcode;

	var worked = Author(inputCode);
}


/*******
This is the c++ to JS converter for array intensive sorts.
It needs to be integrated into the global cpp to JS converter.
Sadly, it looks like we're running out of time, and since it our 
class what matters is not how neat stuff is, but whether it works 
(that's really all they care about), we are just throwing this in here 
to make it work.

Sorry for future algorithma teams. Hopefully someone will have the time to integrate this. 
The development model we've had to use for a 10 week course sucks.
*******/
var paramsPassed = new Array();
// hack to only pull one function name
var firstFuncOnly = 0;
function c2jConvert(input)
{
	var output = input;
	//Do the replacements that can be done globally
	var sizeC = /size\(\)/g;
	output = output.replace(sizeC, "length");
    var push = /push\_back/g;
	output = output.replace(push, 'push');

	//Get array name,
	var endFirstLine = output.indexOf("\n");
	var firstLine = output.substring(0, endFirstLine);
	var arrayName = c2jGetArrayName(firstLine); // returns array name from func-definition "t["
	//globally replace all instances of "t["

	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var funcNameSplit = output.split("\n"); //split the code into individual lines
	var totallines = splitbyline.length; //get number of lines of code

	for ( var i=0; i<totallines; i++ ) //process psuedo-code line at a time
	{
		funcNameSplit[i] = pullFuncName(funcNameSplit[i]);
		splitbyline[i] = c2jConvertToFunction(splitbyline[i]); // deletes lines like "void insert(...)"
		splitbyline[i] = assignToSlice(splitbyline[i]); // converts assign to slice
		splitbyline[i] = c2jPlainVecToVar(splitbyline[i]); // converts 'vector result;' to 'var result = [];'
		splitbyline[i] = c2jVecToVar(splitbyline[i]); // converts 'vector<int>' to 'var'
		splitbyline[i] = c2jIntToVar(splitbyline[i]); // converts 'int|bool' to 'var'
		splitbyline[i] = shiftConvert(splitbyline[i]); // converts 'int ele = right[0] to shift'
		splitbyline[i] = killErase(splitbyline[i]); // converts 'int ele = right[0] to shift'
		splitbyline[i] = intCast(splitbyline[i]); // converts 'int(...)' to 'parseInt(...)'
		splitbyline[i] = EqualizeReturns(splitbyline[i]); // converts 'int(...)' to 'parseInt(...)'
		splitbyline[i] = c2jAddSemiColon(splitbyline[i]); // adds semi-colons to lines that need them.
		splitbyline[i] = addHL(splitbyline[i], i); 

	}
	output = splitbyline.join("\n"); //rejoin all the individual lines
	var funcName = funcNameSplit.join('');
	runThis = funcName;

	return output;
}
function addHL(str, i)
{
	var keyWords = /function|if|for|while|return|else/;
	var beginIndex = str.search(keyWords);

	var tabs = str.substring(0, str.search(/\w/)); // record indentation
	if (beginIndex == -1)
	{
		var checkcur = str.indexOf('{');
		if (checkcur == -1) //no open curly
		{
 			var tmpstr = tabs+"highlightadd("+i+");\n" + str;
		}
		else //yes open curly, highlight before
		{
 			var tmpstr = str + "\n"+tabs+"highlightadd("+i+");";
		}
	}
	else
	{
		var keyWords = /function|else/;
		var beginIndex = str.search(keyWords);
		if (beginIndex == -1) //it's not a function, highlight before
		{
 			var tmpstr = tabs+"highlightadd("+i+");\n" + str;
		}
		else //it's a function, don't highlight
		{
 			var tmpstr = str;
		}
	}
	return tmpstr;
}
function pullFuncName(str)
{
	if (firstFuncOnly != 0)
		return; // hackz!
 
	var keyWords = /vector\<int\>|void|short|double|string|long/; // black list of return types
	var beginIndex = str.search(keyWords);
	var varTypes = /int |bool |string |double |float |short |long /g; // black list of var types inside of parameters
	var doubleCheck = str.search(/\(/); // make sure were on a function declaration 

	if (beginIndex != -1 && doubleCheck != -1)
	{
		var tmpstr = str.replace(keyWords, ''); // trim function c++ return type
		tmpstr = tmpstr.replace(varTypes, ''); // trim variable types for JS
		tmpstr = tmpstr.replace(/^\s+|\s+$/g, ''); // trim whitespace
		tmpstr = tmpstr.replace(/\<.+\>/, ''); // erases things like <int>, <anything inside here>
		tmpstr = tmpstr.substring(0, tmpstr.indexOf('('));
		tmpstr = tmpstr + '(unsorted)'
		firstFuncOnly++; // hackz!
	}
	return tmpstr;
}
function c2jPlainVecToVar(str)
{
		var vectorChange = /vector\<int\> \w+/;
		var vecIndx = str.search(vectorChange);
		var checkeq = str.indexOf('=');
		if (vecIndx != -1 && checkeq == -1) 
		{
			var tmp = str.replace('vector<int> ', ''); 
			var tmp = str.replace(';', ''); 
			var results = ""+tmp+" = [];"
			str = results;
		}
	return str;
}
function EqualizeReturns(str)
{
	var replaceVar;
	var theParam;
	var assignIndex = str.indexOf('return');
	if (assignIndex != -1)
	{ 
		var tabs = str.substring(0, str.search(/\w/)); // record indentation
		var tmpstr = tabs + 'Equalize();\n' + str;
		return tmpstr;
	}
	return str;
}
function killErase(str)
{ // hack to get rid of .erase for special case in mergesort
	var eraseIndex = str.indexOf('.erase(');
	if (eraseIndex != -1)
	{
		str = '';
	}
	return str;
}
function shiftConvert(str)
{
	var types = /int|var|bool|double|string/;
	var typeIndex = str.search(types);
	var arrayOpIndex = str.indexOf('[0]'); // searches for special use of operator
	var equalsIndex = str.indexOf('='); // make sure were in the right situation
	if (typeIndex != -1 && arrayOpIndex != -1 && equalsIndex != -1)
	{
		var tabs = str.substring(0, str.search(/\w/)); // record indentation
		var tmpstr = str.substring(equalsIndex + 1); // get the string after '='
		tmpstr = tmpstr.replace('[0];', ''); // get rid of [] operator
		tmpstr = tmpstr.replace(/^\s+|\s+$/g, ''); // trim whitespace
		var front = str.substring(0, equalsIndex); // get left of '='
		front = front.replace(/^\s+|\s+$/g, ''); // trim whitespace
		str = tabs + front + ' = ' + tmpstr + '.shift();\nMoveSecond('+front.replace('var ', '')+');'; // build JS
	}
	return str;
}
function assignToSlice(str)
{ // worlds longest function to convert '.assign(...' to .slice(...'
	var replaceVar;
	var theParam;
	var assignIndex = str.indexOf('assign');
	if (assignIndex != -1)
	{ // found '.assign(...)'
		var data = str.substring(str.indexOf('(')+1, str.indexOf(')'));
		for (var i = 0; i < paramsPassed.length; i++)
		{ // loop through the paramaters found in function declarations

			var sub = 0; // var to check if we have replaced something
			for (var j = 0; j < 3; j++)
			{ // loop through all cases we could encounter (could be more)
				// convert string to regexp object
				var tmp = paramsPassed[i].replace(/^\s+|\s+$/g,"");
				replaceVar = paramsToRegEx(tmp, j); // trim whitespace
				// could make this routine into a function?
				if (data.search(replaceVar) != -1 && j == 0)
				{ // found 'vec+'
					data = data.replace(replaceVar, '0+');
					sub++;
				}
				else if (data.search(replaceVar) != -1 && j == 1)
				{ // found 'vec '
					data = data.replace(replaceVar, '0');
					sub++;
				}
				else if (data.search(replaceVar) != -1 && j == 2)
				{ // found 'vec,'
					data = data.replace(replaceVar, '0,');
					sub++;
				}
				if (sub)
				{ // if we have repalced something, do this stuff
					theParam = paramsPassed[i]; // save for joining string
					theParam = theParam.replace(/^\s+|\s+/g, ""); // trim whitespace
					theParam = ' ' + theParam; // add one space before for clarity
				}
			}
		}
		str = str.substring(0, str.indexOf('('));
		str = str.replace('.assign', ' =.slice');
		str = str.split('=');
		str[1] = theParam + str[1]; // 'arrName.slice'
		var returnStr = str.join('=');
		var arrName = str[0].replace(/^\s+|\s+/g, "");
		returnStr = returnStr + '(' + data + ');\n'+"MoveArray("+arrName+", '"+arrName+"');";
		return returnStr;
	}
	return str;
}
function paramsToRegEx(str, i)
{ // utility function to convert strings to regexp objects for assignToSlice()
	// could probably be expanded, but assignToSlice then needs to be adjusted 
	var tmp = str;
	if (i == 0)
	{
		tmp = tmp + '\\+';
	}
	if (i == 1)
	{
		tmp = tmp + '\\s';
	}
	if (i == 2)
	{
		tmp = tmp + '\\,';
	}
	var regex = new RegExp(tmp, 'g');
	return regex;

}
function intCast(str)
{ // removes int() and turns into parseInt()
	var typeCast = /int/;
	var castIndex = str.search(typeCast);
	var parenthIndex = str.search(/\(/);

	if (castIndex != -1 && parenthIndex != -1)
	{
		var tmpstr = str.split('int');
		str = tmpstr.join('parseInt');
	}
	return str;
}
function testVarChange(str, arrayName)
{
	var output = str.split(arrayName);
	var temp = output.join("naUnsorted[");
	return output;
}
function c2jAddSemiColon(str)
{
	var keywords = /for|while|if|else|function/;
	var chars = /;|{|}/;

	indx1 = str.search(keywords);
	if (indx1 == -1)
	{ // line doesnt contain blacklist words
		indx2 = str.search(chars);
		if (indx2 == -1)
		{ // line doesnt contain blacklist chars
			indx3 = str.search(/\w/);
			if (indx3 != -1)
			{ // probably useless?
				if (str.length > 0) 
				{ // line needs a semicolon, add it
					str = str + ';';
				}
			}
		}
	}
	return str;
}
function getParams(str)
{ // a utility function for finding params passed to functions
	var params = str.replace(/\(|\)/g, '');
    params = params.replace(/^\s+/, '');
	var commaIndex = params.indexOf(',');
	var tmpstr = new Array(); 
	if (commaIndex != -1)
	{
		params = params.split(',');
		for (var i = 0; i < params.length; i++)
		{
		//	params[i].replace(/^\s+|\s+/g, ""); // trim whitespace at beginning and end of varnames
			tmpstr[i] = params[i];
		}
	}
	else
	{
		tmpstr.push(params);
	}
	for (var i = 0; i < tmpstr.length; i++)
	{
		paramsPassed.push(tmpstr[i]);
	}
}
function c2jConvertToFunction(str)
{
	//convert to javascript "function bubbleSort()"
	var keyWords = /vector\<int\>|void|short|double|string|long/g;
	var killWords = /int |var |\[\]/g;
	var beginIndex = str.search(keyWords);
	var doubleCheck = str.search(/\(/); 

	var data = '';
	if (beginIndex != -1 && doubleCheck != -1) //found 'void'
	{
		//get parameters being passed (int arr[])
		var tmpstr = str.replace(/^\s+/, ''); // trim whitespace at beginning
		data = tmpstr.substring(tmpstr.indexOf('('));

		data = data.replace(keyWords, '');
		data = data.replace(killWords, '');
                
		// finc params passed to each function
		getParams(data);

		//get function name from line
		var funcName = str.replace(/\w+/, '');
		funcName = funcName.replace('<int>', ''); // remove '<int>' from function dec.
		funcName = funcName.substring(0, funcName.indexOf('('));
		data = "function" + funcName + data;
		return data;
	}
	else
	{	
		return str;
	}
}
function c2jFuncName(str)
{
	var keyWords = /vector|void|short|double|string|long/;
	var beginIndex = str.search(keyWords);
	var varTypes = /int |bool |string |double |float |short |long /g;
	var doubleCheck = str.search(/\(/); 
	
	if (beginIndex != -1 && doubleCheck != -1)
	{
		var tmpstr = str.replace(keyWords, ''); // trim c++ type declaration
		tmpstr = tmpstr.replace(varTypes, '');
		tmpstr = tmpstr.replace(/^\s+/, ''); // trim whitespace
		var paramSplit = tmpstr.indexOf(',');
		var addParam = ', naUnsorted.length)' // simpler than hardcoding a string
		if (paramSplit != -1)
		{
			var arrayDeclared = tmpstr.indexOf('[');
			if (arrayDeclared != -1)
			{
				tmpstr = tmpstr.substring(0, arrayDeclared);
			}
			tmpstr = tmpstr + addParam;
		}
	}
	return tmpstr;
}
function c2jGetArrayName(str)
{
	var keyWords = /void|short|double|string|long/;
	var funcIndex = str.search(keyWords);
	var doubleCheck = str.search(/\(/); 

	if (funcIndex != -1 && doubleCheck != -1) //found 'void'
	{
		var beginIndex = -1;
		var endIndex = -1;
		var tmpstr = '';
		beginIndex = str.indexOf("("); // find the start of parameters passed
		endIndex = str.indexOf("]"); // find the end of the array's name
		var keyWords = /int|double|string/; // words to be replaced in front of array name

		if (beginIndex != -1 && endIndex != -1)
		{	// found first line of a function
			tmpstr = str.substring(beginIndex + 1, endIndex)
			var arrayName = tmpstr.replace(keyWords, ""); // trim c++ keywords
			var arrayName = arrayName.replace(/^\s+|\s+/g, ""); // trim whitespace and leave only "t["
		}
	}
	return arrayName;
}
function c2jVecToVar(str)
{
	var vectorChange = "vector<int>";
	var vecIndx = str.indexOf(vectorChange);
	var varNames = '';
	if (vecIndx != -1) 
	{
		var tabs = str.substring(0, vecIndx);
		varNames = str.substring(vecIndx + 12);
		var results = tabs + 'var ' + varNames;
		str = results;
	}
	return str;
}
function c2jIntToVar(str) 
{
	var results = str;
	var beginIndex = -1;
	var varNames = "";

	beginIndex = str.search(/int|bool/);
	if (beginIndex != -1)
	{
		var tabs = str.substring(0, beginIndex);
		varNames = str.substring(beginIndex + 4);
		var results = tabs + 'var ' + varNames;
		str = results;
	}
	return str;
}
function c2jConvertForLoops(str)
{
	var beginIndex = -1;
	var endIndex = -1;
	var data = "";
	
	beginIndex = str.indexOf('for');
	if (beginIndex != -1)
	{
		var tmpIndex = beginIndex + 3;
		var tabs = str.substring(0, beginIndex + 3);

		var notFor = str.substring(tmpIndex);
		var pieces = notFor.split(';');
		var mid = pieces[1].split(' ');

		mid[3] = "naUnsorted." + mid[3];
		pieces[1] = mid.join(' ');
		str = tabs + ' ' + pieces.join(';');
	}
	
	return str;
}
/*******END converter code*********/

function ele()
{ 
	this.value = -1;
	this.row = 0; 
	this.col = 0; 
	this.offsetTop = 0; 
	this.offsetLeft = 0; 
}

function Initialize() 
{
    setButtonEnable('stop',0);
    setButtonEnable('start',0);
    setButtonEnable('reset',1);   

    var numbers = new Array;
    numbers[0] = 0;
    numbers[1] = 1;
    numbers[2] = 2;
    numbers[3] = 3;
    numbers[4] = 4;
    numbers[5] = 5;
    numbers[6] = 6;
    numbers[7] = 7;
    numbers[8] = 8;
    numbers[9] = 9;
    numbers = shuffle(numbers);
    unsorted[0] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[1] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[2] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[3] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[4] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[5] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[6] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[7] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[8] = numbers.pop(); //retrieve number
    numbers = shuffle(numbers);
    unsorted[9] = numbers.pop(); //retrieve number

    document.getElementById('box0').innerHTML = "<h1 class='h1box'>"+unsorted[0]+"</h1>";
    document.getElementById('box1').innerHTML = "<h1 class='h1box'>"+unsorted[1]+"</h1>";
    document.getElementById('box2').innerHTML = "<h1 class='h1box'>"+unsorted[2]+"</h1>";
    document.getElementById('box3').innerHTML = "<h1 class='h1box'>"+unsorted[3]+"</h1>";
    document.getElementById('box4').innerHTML = "<h1 class='h1box'>"+unsorted[4]+"</h1>";
    document.getElementById('box5').innerHTML = "<h1 class='h1box'>"+unsorted[5]+"</h1>";
    document.getElementById('box6').innerHTML = "<h1 class='h1box'>"+unsorted[6]+"</h1>";
    document.getElementById('box7').innerHTML = "<h1 class='h1box'>"+unsorted[7]+"</h1>";
    document.getElementById('box8').innerHTML = "<h1 class='h1box'>"+unsorted[8]+"</h1>";
    document.getElementById('box9').innerHTML = "<h1 class='h1box'>"+unsorted[9]+"</h1>";


	for(i=0; i<10; i++)
	{
		//whole first row is filled
		openHomeSpots[i] = 0;
	}   
	for(i=0; i<10; i++)
	{
		//whole second row is open
		openSpots[i] = 1;
	}   
	for(i=0; i<10; i++)
	{
		elemInfo[i] = new ele();
		elemInfo[i].value = unsorted[i];
		elemInfo[i].row = 0;
		elemInfo[i].col = i;
		elemInfo[i].offsetTop = document.getElementById("box"+i).offsetTop;
		elemInfo[i].offsetLeft = document.getElementById("box"+i).offsetLeft;
		elemInfoStatic[i] = new ele();

	}       
	for(i=0; i<9; i++)
	{
		elemSpacerInfo[i] = new ele();
		elemSpacerInfo[i].row = 0;
		elemSpacerInfo[i].col = i;

	}       
    elemInfoStatic[0].offsetLeft = 100; 
    elemInfoStatic[1].offsetLeft = 160; 
    elemInfoStatic[2].offsetLeft = 220; 
    elemInfoStatic[3].offsetLeft = 280; 
    elemInfoStatic[4].offsetLeft = 340; 
    elemInfoStatic[5].offsetLeft = 400; 
    elemInfoStatic[6].offsetLeft = 460; 
    elemInfoStatic[7].offsetLeft = 520; 
    elemInfoStatic[8].offsetLeft = 580; 
    elemInfoStatic[9].offsetLeft = 640; 

    elemSpacerInfo[0].offsetLeft = 150; 
    elemSpacerInfo[1].offsetLeft = 210; 
    elemSpacerInfo[2].offsetLeft = 270; 
    elemSpacerInfo[3].offsetLeft = 330; 
    elemSpacerInfo[4].offsetLeft = 390; 
    elemSpacerInfo[5].offsetLeft = 450; 
    elemSpacerInfo[6].offsetLeft = 510; 
    elemSpacerInfo[7].offsetLeft = 570; 
    elemSpacerInfo[8].offsetLeft = 630; 

	setHelpText();

	//var sorted = mergeSort(unsorted);

}
function Author(inputCode) 
{
	eval(inputCode);
	eval(runThis);
	return 1;
}

/*
function mergeSort(arr)
{
    if (arr.length < 2)
        return arr;
 
    var middle = parseInt(arr.length / 2);

    var left;
    var right;

	left = arr.slice(0, middle);
	MoveArray(left, 'left');

	right  = arr.slice(middle, arr.length);
	MoveArray(right, 'right');

	Equalize();
    return merge(mergeSort(left), mergeSort(right));
}
 
function merge(left, right)
{
    var result = [];
 	
    while (left.length && right.length) 
	{
        if (left[0] <= right[0]) 
		{
			var ele = left.shift();
			MoveSecond(ele);
            result.push(ele);
        } 
		else 
		{
			var ele = right.shift();
			MoveSecond(ele);
            result.push(ele);
        }
    }
 
    while (left.length)
	{
		var ele = left.shift();
		MoveSecond(ele);
        result.push(ele);
	}
 
    while (right.length)
	{
		var ele = right.shift();
		MoveSecond(ele);
        result.push(ele);
	}
 
	Equalize();
    return result;
}
*/

function highlightadd(str)
{
	//take off the comment tag below in the real presentation
	//naMoves.push('Highlight('+str+');');
}

function Highlight ( sVariable )
{
	UndoHL();
	sVariable = 'psuedoCode' + sVariable;
	document.getElementById(sVariable).style.backgroundColor="gold";
}

function UndoHL( )
{

    for ( i = 0; i < totalLines; i++ )
    {
        sVariable = 'psuedoCode' + i;
		document.getElementById(sVariable).style.backgroundColor="white";
    }

}


function MoveArray(arr, dir)
{
	var last = "";
	var fullpush = "";
	for ( var i=0, len=arr.length; i<len; ++i )
	{
		if(dir == 'left')
	        fullpush += "MoveBoxDown("+unsorted.indexOf(arr[i])+");";
		if(dir == 'right')
	        fullpush += "MoveBoxDown("+unsorted.indexOf(arr[i])+");";
		last = unsorted.indexOf(arr[i]);
	}
	naMoves.push(fullpush);
	if(last < 9)
		naMoves.push("MoveSpacer("+last+");");
}

function MoveSecond(ele)
{
	naMoves.push("MoveToMerge("+unsorted.indexOf(ele)+");");
}

function Equalize()
{
	naMoves.push("MoveEqualize();");
}


var nStarted = 0;
function StartAnimation() 
{
    nStarted = 1;
    if(nStopped == 0)
    {
        StepAnimation();
        setButtonEnable('start',0);
		setButtonEnable('stop',1);
    }
}

var nStep = 0;
function StepAnimation() 
{
	if(nStopped == 1 && nStarted == -1)
	{
		StepAnimation()
	}
	setButtonEnable('start',0);
	//  -- Animation One
	eval(naMoves[nStep]);

	if(nStarted == 1 )
	{
	   setTimeout("UpdateStart()",1000);
	}
    if(nStarted == 0 )
    {	
	   nStep++;
    }
}

// Increments animation and calls StepAnimation for the next animation to animate
function UpdateStart()
{
    nStep += 1
	setTimeout("StepAnimation()",100);
}

//Stops Animation
var nStopped = 0
function StopAnimation()
{
	if( nStopped == 0 )
	{
		nStarted = -1;
        nStopped = 1;
		changeTxt('stop',"Resume");
	}
	else if( nStopped == 1 )
	{
		nStopped = 0;
		nStarted = 1;
		changeTxt('stop',"Stop");
		StepAnimation();
	}
}
//Reloads the page
function ResetAnimation() 
{
	window.location.reload(true);
}

function setButtonEnable(ID,SWITCH) 
{
	if(SWITCH == 1)
	{
		document.getElementById(""+ID+"").disabled = false;
	}
	if(SWITCH == 0)
	{
		document.getElementById(""+ID+"").disabled = true;
	}
}

function Move(id,x,y,time) 
{
	var anim = manager.createAnimObject(""+id+"");  
   	anim.add({property: Prop.position, to: new Pos(x,y),   
     duration: time,
	 ease:	jsAnimEase.parabolicNeg  
	 });
}

function MoveBoxDown(bId)
{
    var topPosition = elemInfo[bId].offsetTop;
    topPosition += 96; 
	elemInfo[bId].offsetTop += 96;
	elemInfo[bId].col = 1;

    var leftPosition = elemInfo[bId].offsetLeft;
    leftPosition += 0;
	elemInfo[bId].offsetLeft += 0;
	elemInfo[bId].row += 0;

    Move('box'+bId,leftPosition,topPosition, 1000);               
}

function MoveSpacer(bId)
{
    document.getElementById("spacer"+bId).style.display = "block"; 
    var topPosition = elemInfo[bId].offsetTop;
    var leftPosition = elemSpacerInfo[bId].offsetLeft;
    elemSpacerInfo[bId].row = elemInfo[bId].row;

    Move('spacer'+bId,leftPosition, topPosition, 1000);               
}

function RemoveSpacer(bId)
{
    document.getElementById("spacer"+bId).style.display = "none";     
}

function MoveToMerge(ele)
{
	for(i=0; i<10; i++)
	{
		if(openSpots[i] == 1)
		{
			var leftpos = i * 60 + 100;
			openSpots[i] = 0;
			openHomeSpots[ele]=1;

			Move('box'+ele,leftpos,96,1000);
		    elemInfo[ele].offsetLeft = leftpos;
			elemInfo[ele].col = i;
			elemInfo[ele].row = 1;
			break;
		}
	}   
}

function MoveEqualize()
{
	var filled = 0;
	for(i=0; i<9; i++) //kill floating spacers
	{
    	if(elemSpacerInfo[i].row == 0)
		{
	    	if(elemInfo[i].row != 0 && elemInfo[i+1].row != 0)
			{
				RemoveSpacer(i);
			}
		}
		
	}   
	for(i=0; i<10; i++)
	{
		if(openSpots[i]==0 || openHomeSpots[i] == 0)
			filled++;
	}   
	if(filled == 10) //then 1 per column, just shift to first row
	{
		for(i=0; i<10; i++)
		{
			//whole first row is now closed
			openHomeSpots[i] = 0;
			//whole second row is now open
			openSpots[i] = 1;
		}   
		for(i=0; i<10; i++)
		{
	
		    var topPosition = 0;
		    var leftPosition = elemInfo[i].offsetLeft;
		    elemInfo[i].offsetTop = topPosition;
		    elemInfo[i].row = 0; //col is unchanged
		
		    Move('box'+i,leftPosition, topPosition, 1000);  
	
		}       
		for(i=0; i<9; i++)
		{
		    var topPosition = 0;
		    var leftPosition = elemSpacerInfo[i].offsetLeft;
		    elemSpacerInfo[i].offsetTop = topPosition;
		
		    Move('spacer'+i,leftPosition, topPosition, 1000); 
	
		}     	
	}
	else
	{
		//find open spot, move there

		var foundspot = -1;

		for(i=0; i<10; i++)
		{
			if (openHomeSpots[i] == 1)
			{
				foundspot = i;
				break;
			}
		}   
		var nextspot = foundspot;
		var moveslist = ['', '', '', '', '', '', '', '', '', ''];;
		for(j=0; j<10; j++)
		{
			for(i=0; i<10; i++)
			{
				if(elemInfo[i].row==1 && elemInfo[i].col==j)
				{
					//move this one
	
				    var topPosition = 0;
			    	elemInfo[i].row = 0;
	
				    var leftPosition = elemInfoStatic[nextspot].offsetLeft;
	
				    elemInfo[i].offsetTop = topPosition;
				    elemInfo[i].offsetLeft = leftPosition;
				    moveslist[elemInfo[i].col]= "Move('box"+unsorted.indexOf(elemInfo[i].value)+"',"+leftPosition+", "+topPosition+", 1000); ";
					nextspot++; 
				}
			}      	
		}      	
		for(i=0; i<10; i++)
		{
			if(moveslist[i]!="")
			{
				eval(moveslist[i]);
			}
		}

		for(i=0; i<10; i++)
		{
			//whole first row is now closed
			openHomeSpots[i] = 0;
			//whole second row is now open
			openSpots[i] = 1;
			//all surviving spacers now in first row
			if(i<9)
				elemSpacerInfo[i].row = 0;
		}   
	}
}

function changeTxt(ID,TXT) {
    document.getElementById(""+ID+"").innerHTML = TXT; 
}


function setHelpText()
{

	document.getElementById("concept").onmouseover = function () 
    {
	   Tip(
       "This Authoring System Module is used for Array-Intensive Algorithms like Merge Sort that split arrays into smaller sub-arrays."+
       " A line appears to separate separate arrays.",
       WIDTH, 
       500, 
       FONTFACE, 
       'Verdana, sans-serif', 
       FONTSIZE, '12pt',
       FONTCOLOR, '#000000',
       PADDING, 8, 
       SHADOW, true, 
       SHADOWCOLOR, '#CCCCCC', 
       FADEIN, 400, 
       FADEOUT, 800,
       CENTERMOUSE, true, 
       OFFSETX, 0 ,
       BGCOLOR, '#FFFFCC');
	}
	document.getElementById("howto").onmouseover = function() 
    {
	   Tip(
       "<strong>Start</strong> - Starts the Merge Sort animation <br /><br /><strong>"+
       "Stop</strong> - Stops the animation at its current location<br /><br /><strong>"+
       "Step</strong> - Steps through the animation<br /><br /><strong>"+
       "Reset</strong> - Resets the animation",
       WIDTH, 400, 
       FONTFACE, 'Verdana, sans-serif', 
       FONTSIZE, '12pt',
       FONTCOLOR, '#000000',
       PADDING, 8, 
       SHADOW, true, 
       SHADOWCOLOR, '#CCCCCC', 
       FADEIN, 400, 
       FADEOUT, 800,
       CENTERMOUSE, true, 
       OFFSETX, 0 ,
       BGCOLOR, '#CEFFFF');
	}

}
