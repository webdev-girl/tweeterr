
<!DOCTYPE html>
<html class="timeline-bg" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tweeter.com</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tweeter.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="topnav">
            <ul>
                <li><a href="/index"><i class="fab fa-twitter"></i>Home</a></li>
                <li><a href="/moments">Moments</a></li>
                <li><a href="/notifications">Notifications</a></li>
                <li><a href="/messages">Messages</a></li>
                <li><i class="fab fa-twitter "></i></li>
                <form class="t1-form form-search js-search-form" action="/search" id="global-nav-search">
                    <label class="visuallyhidden" for="search-query">Search query</label>
                        <input class="search-input" type="text" id="search-query" placeholder="Search Twitter" name="q" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-19">
                        <span class="search-icon js-search-action">
                            <button type="submit" class="Icon Icon--medium Icon--search nav-search" tabindex="-1">
                                <span class="visuallyhidden">Search Twitter</span>
                            </button>
                        </span>
                        <div role="listbox" class="dropdown-menu typeahead" id="typeahead-dropdown-19">
                            <div aria-hidden="true" class="dropdown-caret">
                                <div class="caret-outer"></div>
                                <div class="caret-inner"></div>
                            </div>
                            <div role="presentation" class="dropdown-inner js-typeahead-results"><div role="presentation" class="typeahead-recent-searches block0">
                                <h3 id="recent-searches-heading" class="typeahead-category-title recent-searches-title">Recent searches</h3><button type="button" tabindex="-1" class="btn-link clear-recent-searches">Clear</button>
                                <ul role="presentation" class="typeahead-items recent-searches-list">
                                    <li role="presentation" class="typeahead-item typeahead-recent-search-item">
                                        <span class="Icon Icon--close" aria-hidden="true"><span class="visuallyhidden">Remove</span></span>
                                        <a role="option" aria-describedby="recent-searches-heading" class="js-nav" href="" data-search-query="" data-query-source="" data-ds="recent_search" tabindex="-1"></a>
                                    </li>
                                </ul>
                            </div><div role="presentation" class="typeahead-saved-searches block2">
                                <h3 id="saved-searches-heading" class="typeahead-category-title saved-searches-title">Saved searches</h3>
                                <ul role="presentation" class="typeahead-items saved-searches-list">
                                    <li role="presentation" class="typeahead-item typeahead-saved-search-item">
                                        <span class="Icon Icon--close" aria-hidden="true"><span class="visuallyhidden">Remove</span></span>
                                        <a role="option" aria-describedby="saved-searches-heading" class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"></a>
                                    </li>
                                </ul>
                            </div><ul role="presentation" class="typeahead-items typeahead-topics block3" style="display: none;">
                                <li role="presentation" class="typeahead-item typeahead-topic-item">
                                    <a role="option" class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"></a>
                                </li>
                            </ul><ul role="presentation" class="typeahead-items typeahead-accounts social-context js-typeahead-accounts block4" style="display: none;">
                                <li role="presentation" data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
                                    <a role="option" class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
                                        <div class="js-selectable typeahead-in-conversation hidden">
                                            <span class="Icon Icon--follower Icon--small"></span>
                                            <span class="typeahead-in-conversation-text">In this conversation</span>
                                        </div>
                                        <img class="avatar size32" alt="">
                                        <span class="typeahead-user-item-info account-group">
                                            <span class="fullname"></span><span class="UserBadges"><span class="Icon Icon--verified js-verified hidden"><span class="u-hiddenVisually">Verified account</span></span><span class="Icon Icon--protected js-protected hidden"><span class="u-hiddenVisually">Protected Tweets</span></span></span><span class="UserNameBreak">&nbsp;</span><span class="username u-dir" dir="ltr">@<b></b></span>
                                        </span>
                                        <span class="typeahead-social-context"></span>
                                    </a>
                                </li>
                                <li role="presentation" class="js-selectable typeahead-accounts-shortcut js-shortcut"><a role="option" class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
                            </ul></div>
                        </div>
                    </form>
                <li>profile</li>
                <button onclick="document.getElementById('id01').style.display='block'"
                    class="w3-button timeline-tweet-button">Tweet</button>
            </ul>
        </div>
        <div class="w3-container timeline-modal">
            
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                    <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <textarea name="post" rows="5" cols="40"></textarea>
                    </div>
                </div>
            </div>
        </div>

    @include('partials.footer')
    </body>
</html>
