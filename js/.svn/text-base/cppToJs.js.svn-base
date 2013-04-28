/*
	Name:		Student Name, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		cppTojs.js
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
*/
function c2jConvert(input)
{
	var output = input;
	//Do the replacements that can be done globally
	output = output.replace(/:=/gi, "="); 

	//Get array name,
	var endFirstLine = output.indexOf("\n");
	var firstLine = output.substring(0, endFirstLine);
	var arrayName = c2jGetArrayName(firstLine); // returns array name from func-definition "t["
	//globally replace all instances of "t["
	var output = output.split(arrayName).join("naUnsorted[");

	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var funcNameSplit = output.split("\n"); //split the code into individual lines
	var totallines = splitbyline.length; //get number of lines of code
	
	for ( var i=0; i<totallines; i++ ) //process psuedo-code line at a time
	{
		funcNameSplit[i] = c2jFuncName(funcNameSplit[i]);
		splitbyline[i] = c2jIntToVar(splitbyline[i]); // of the type "for i := 2 to n do"
		splitbyline[i] = c2jConvertToFunction(splitbyline[i]); // deletes lines like "void insert(...)"
	//	splitbyline[i] = c2jConvertForLoops(splitbyline[i]); // of the type "for i := 2 to n do"
		splitbyline[i] = c2jAddSemiColon(splitbyline[i]); // adds semi-colons to lines that need them.
	}
	output = splitbyline.join("\n"); //rejoin all the individual lines

	// call to add highlighting lines
	var test = c2jaddAnimHL(output);

	// call to retrieve function declaration line
	var funcName = funcNameSplit.join('');
	runThis = funcName;
	//alert ("function name is: " + funcName);

	return test;
}
function c2jgetCurlyOnlyLines(str) 
{
	var tmpstr = str.split('\n');
	var curlyIndex = -1;
	var wordIndex = -1;
	var linesWithCurlys = new Array();
	for (var i = 0; i < tmpstr.length; i++)
	{
		linesWithCurlys[i] = 0;
		curlyIndex = tmpstr[i].indexOf('{');
		wordIndex = tmpstr[i].indexOf(/\S/);
		if (curlyIndex != -1)
		{
			if (curlyIndex != -1)
			{
				linesWithCurlys[i] = i;
			}
		}
	}
	return linesWithCurlys;
}
function c2jaddAnimHL(str)
{
	var curlyLines = c2jgetCurlyOnlyLines(str);
	var splitByLine = str.split('\n');
	var length = splitByLine.length + 1;
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (curlyLines[i] != 0 && splitByLine[i].length > 0)
		{
			splitByLine[i] = '';
			splitByLine[i-1] = splitByLine[i-1] + ' {';
		}
	}
	var subs = 0;
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (splitByLine[i]=="")
		{
			splitByLine[i] = '';
			subs--;
		}
		else
		{
			subs = 0;
			var linenum = i + subs;
			var checkcur = splitByLine[i].replace(/^\s+|\s+$/g,"");
			if(checkcur == '}' && i + 1 != splitByLine.length)
				splitByLine[i] = splitByLine[i] + '\n\thighlightadd(\"' + linenum + '\"\);';
			else
				splitByLine[i] = '\thighlightadd(\"' + linenum + '\"\);\n' + splitByLine[i];

				
		}
	}
	
	var newarry = new Array();
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (splitByLine[i]!="")
			newarry.push(splitByLine[i]);
	}
	
	var returnStr = newarry.join('\n');
	return returnStr;
}
function c2jAddSemiColon(str)
{
	var keywords = /for|while|if|else|function/;
	var chars = /;|{|}/;

	indx1 = str.search(keywords);
	if (indx1 == -1)
	{
		indx2 = str.search(chars);
		if (indx2 == -1)
		{
			if (str.length > 0) 
			{
				str = str + ';';
			}
		}
	}
	return str;
}
function c2jConvertToFunction(str)
{
	//convert to javascript "function bubbleSort()"
	var keyWords = /vector|void|short|double|string|long/;
	var killWords = /int |var |\[\]/g;
	var beginIndex = str.search(keyWords);
	var doubleCheck = str.search(/\(/); 

	var data = '';
	if (beginIndex != -1 && doubleCheck != -1) //found 'void'
	{
		//get parameters being passed (int arr[])
		var tmpstr = str.replace(/^\s+/, ''); // trim whitespace at beginning
		data = tmpstr.substring(tmpstr.indexOf('('));
		data = data.replace(killWords, '');
		
		//get function name from line
		var funcName = str.replace(/\w+/, '');
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
	}
	return results;
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
