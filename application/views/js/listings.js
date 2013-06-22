/**
 * Created with JetBrains PhpStorm.
 * User: phisikus
 * Date: 22.06.13
 * Time: 21:35
 * To change this template use File | Settings | File Templates.
 */

function showList(targetTable, data) {
    $('#' + targetTable + ' tbody').remove();
    var tt = $('#' + targetTable);

    if ("pages" in data)
        for (var i = 0; i < data["pages"].length; i++) {
            tt.append('<tr><td class="no"><a href="' + baseUrl + 'index.php/page/admin/edit/' + data["pages"][i].id + '">' + data["pages"][i].id + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/page/admin/edit/' + data["pages"][i].id + '">' + data["pages"][i].title + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/page/admin/edit/' + data["pages"][i].id + '">' + data["pages"][i].short_title + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/page/admin/edit/' + data["pages"][i].id + '">' + data["pages"][i].date + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/user/admin/profile/' + data["pages"][i].author_id + '">' + data["pages"][i].author_name + '</a></td></tr>');
        }

    if ("users" in data)
        for (var i = 0; i < data["users"].length; i++) {
            if (data["users"][i].full_name == null) data["users"][i].full_name = "";
            tt.append('<tr><td class="no"><a href="' + baseUrl + 'index.php/user/admin/edit/' + data["users"][i].id + '">' + data["users"][i].id + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/user/admin/edit/' + data["users"][i].id + '">' + data["users"][i].username + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/user/admin/edit/' + data["users"][i].id + '">' + data["users"][i].full_name + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/user/admin/edit/' + data["users"][i].id + '">' + data["users"][i].email + '</a></td>' +
                '</tr>');
        }


    if ("comments" in data)
        for (var i = 0; i < data["comments"].length; i++) {
            tt.append('<tr><td class="no"><a href="' + baseUrl + 'index.php/comment/admin/page_comment/' + data["comments"][i].id + '">' + data["comments"][i].id + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/comment/admin/page_comment/' + data["comments"][i].id + '">' + data["comments"][i].title + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/comment/admin/page_comment/' + data["comments"][i].id + '">' + data["comments"][i].date + '</a></td>' +
                '<td><a href="' + baseUrl + 'index.php/comment/admin/page_comment/' + data["comments"][i].id + '">' + data["comments"][i].comments + '</a></td>' +
                '</tr>');
        }


}

function getList(model, searchFieldId, targetTable) {
    $('#' + targetTable + ' tbody tr').remove();
    $('#' + targetTable + ' tbody').append(" Searching...");

    var onRetreive = function (target) {
        return function (data) {
            showList(target, data);
        }
    };
    var args = {'search': $('#' + searchFieldId).val()};
    jQuery.post(baseUrl + "index.php/" + model + "/admin/listJson", args, onRetreive(targetTable));

}