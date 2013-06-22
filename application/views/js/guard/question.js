/**
 * Created with JetBrains PhpStorm.
 * User: phisikus
 * Date: 22.06.13
 * Time: 17:15
 * To change this template use File | Settings | File Templates.
 */
function markDraftProposition()
{
   $('#createDraft').addClass("createDraftActive");
}

function unmarkDraftProposition()
{
    $('#createDraft').removeClass("createDraftActive");
}