// JavaScript Document
// 	Аналоги PHP функций
//
// 	Последняя сборка 01062009
//	Содержит:

//	basename(path, suffix)
//	explode( delimiter, string )
//	str_replace(search, replace, subject, count)
//
//




//Возвращает название файла без пути
function basename(path, suffix) {
    // *     example 1: basename('/www/site/home.htm', '.htm');
    // *     returns 1: 'home'
 
    var b = path.replace(/^.*[\/\\]/g, '');
    
    if (typeof(suffix) == 'string' && b.substr(b.length-suffix.length) == suffix) {
        b = b.substr(0, b.length-suffix.length);
    }
    
    return b;
}




// Split a string by string
function explode( delimiter, string ) 
{   
	var emptyArray = { 0: '' };
 
    if ( arguments.length != 2
        || typeof arguments[0] == 'undefined'
        || typeof arguments[1] == 'undefined' )
    {
        return null;
    }
 
    if ( delimiter === ''
        || delimiter === false
        || delimiter === null )
    {
        return false;
    }
 
    if ( typeof delimiter == 'function'
        || typeof delimiter == 'object'
        || typeof string == 'function'
        || typeof string == 'object' )
    {
        return emptyArray;
    }
 
    if ( delimiter === true ) {
        delimiter = '1';
    }

    return string.toString().split ( delimiter.toString() );
}








//Функция  str_replace
function str_replace(search, replace, subject, count) 
{
    var i = 0, j = 0, temp = '', repl = '', sl = 0, fl = 0,
            f = [].concat(search),
            r = [].concat(replace),
            s = subject,
            ra = r instanceof Array, sa = s instanceof Array;
    s = [].concat(s);
    if (count) 
	{
        this.window[count] = 0;
    }
 
    for (i=0, sl=s.length; i < sl; i++) 
	{
        if (s[i] === '') 
		{
            continue;
        }
        for (j=0, fl=f.length; j < fl; j++) 
		{
            temp = s[i]+'';
            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
            s[i] = (temp).split(f[j]).join(repl);
            if (count && s[i] !== temp) {
                this.window[count] += (temp.length-s[i].length)/f[j].length;}
        }
    }
    return sa ? s : s[0];
}