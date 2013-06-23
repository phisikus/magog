/**
 * Created with JetBrains PhpStorm.
 * User: phisikus
 * Date: 28.03.13
 * Time: 03:04
 * To change this template use File | Settings | File Templates.
 */

function showHide(e)
{
    var el = document.getElementById(e);
    if(el.style.display == "none")
        el.style.display = "block";
    else
        el.style.display = "none";

}
