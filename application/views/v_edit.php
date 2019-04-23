<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $title . " - Wikipedia"; ?>
    </title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="wrapAll clearfix">
        <div class="sidebar">
            <div class="logo">
                <a href="<?php echo site_url('wiki/index'); ?>"><img src='<?php echo base_url(); ?>assets/img/logo.png' alt="logo"></a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="<?php echo site_url('wiki/index'); ?>">Main page</a></li>
                    <li><a href="#">Contents</a></li>
                    <li><a href="#">Featured content</a></li>
                    <li><a href="#">Current events</a></li>
                    <li><a href="#">Random article</a></li>
                    <li><a href="#">Donate to Wikipedia</a></li>
                    <li><a href="#">Wikipedia store</a></li>
                </ul>
                <h3>Interaction</h3>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">About Wikipedia</a></li>
                    <li><a href="#">Community portal</a></li>
                    <li><a href="#">Recent changes</a></li>
                    <li><a href="#">Contact page</a></li>
                </ul>
                <h3>Tools</h3>
                <ul>
                    <li><a href="#">Upload file</a></li>
                    <li><a href="#">Special pages</a></li>
                    <li><a href="#">Printable version</a></li>
                </ul>
                <h3>Languages</h3>
            </div>

        </div>
        <div class="mainsection">
            <div class="headerLinks">
                <span class="user">Not logged in</span> <a href="#">Talk</a> <a href="#">Contributions</a> <a href="<?php echo site_url('Wikipedia/register'); ?>">Create account</a> <a href="<?php echo site_url('Wikipedia/login'); ?>">Log in</a>
            </div>
            <div class="tabs clearfix">
                <div class="tabsLeft">
                    <ul>
                        <li><a href="" class="active text-body">Article</a></li>
                        <li><a href="" class="text-body">Talk</a></li>
                    </ul>
                </div>
                <div class="tabsRight">
                    <ul>
                        <li><a href="<?= base_url('index.php/wiki/'.$id) ?>" class="text-body">Read</a></li>
                        <li><a href="<?= base_url('index.php/wiki/'.$id.'/edit') ?>" class="active text-body">Edit</a></li>
                        <li><a href="" class="text-body">View History</a></li>
                        <li class="bg-white text-body">
                            <div id="simpleSearch">
                                <input class="doSearch" type="text" name="searchInput" id="searchInput" placeholder="Search Wikipedia" size="12" />
                                <div id="submitSearch"></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="article">
                <h1 class="firstHeading" lang="en" id="firstHeading"><?= $title ?></h1>
                <div class="bodyContent" id="bodyContent" style="font-size: 0.875em; line-height: 1.6;">
                    <div id="mw-anon-edit-warning" class="alert alert-warning" role="alert">
                        <span style="color:#d33; font-weight:bold;">You are not logged in.</span> Your
                        <a href="/wiki/IP_address" title="IP address">
                          IP address
                        </a>
                        will be publicly visible if you make any edits. If you
                        <span class="plainlinks">
                          <b>
                            <a class="external text" href="//en.wikipedia.org/w/index.php?title=Special:UserLogin&amp;returnto=Impresa_Pizzarotti">
                              log in
                            </a>
                          </b>
                          or
                          <b>
                            <a class="external text" href="//en.wikipedia.org/w/index.php?title=Special:UserLogin/signup&amp;campaign=anoneditwarning&amp;returnto=Impresa_Pizzarotti">
                              create an account
                            </a>
                          </b>
                        </span>
                         , your edits will be attributed to a user name, among
                        <a href="/wiki/Wikipedia:Why_create_an_account%3F" title="Wikipedia:Why create an account?">
                          other benefits
                        </a>.
                    </div>
                    <div class="editpage-head-copywarn">
                        <p>
                            <i>Content that <a href="/wiki/Wikipedia:Copyright_violations" title="Wikipedia:Copyright violations">violates any copyrights</a> will be deleted. Encyclopedic content must be <a href="/wiki/Help:Introduction_to_referencing_with_Wiki_Markup/1" title="Help:Introduction to referencing with Wiki Markup/1">verifiable</a>. Work submitted to Wikipedia can be edited, used, and redistributed—by anyone—subject to <a href="/wiki/Wikipedia:Reusing_Wikipedia_content" title="Wikipedia:Reusing Wikipedia content">certain terms and conditions</a>.</i>
                        </p>
                    </div>
                    <form class="mw-editform" id="editform" name="editform" action="<?= base_url('index.php/action/doEdit/'.$id) ?>" method="post">
                        <div class="wikiEditor-ui">
                            <div class="wikiEditor-ui-view wikiEditor-ui-view-wikitext">
                                <div class="wikiEditor-ui-left">
                                    <div class="wikiEditor-ui-top">
                                        <div class="wikiEditor-ui-toolbar" id="wikiEditor-ui-toolbar">
                                            <div class="toolbar section section-main" id="wikiEditor-section-main">
                                                <div class="group group-format" rel="format">
                                                  <span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="bold" id="toolbar-bold">
                                                    <a class="oo-ui-buttonElement-button" role="button" title="Bold" tabindex="0" aria-disabled="false" rel="nofollow">
                                                      <span class="oo-ui-iconElement-icon oo-ui-icon-bold"></span>
                                                      <span class="oo-ui-labelElement-label"></span>
                                                      <span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span>
                                                    </a>
                                                  </span>
                                                  <span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="italic" id="toolbar-italic">
                                                    <a class="oo-ui-buttonElement-button" role="button" title="Italic" tabindex="0" aria-disabled="false" rel="nofollow">
                                                      <span class="oo-ui-iconElement-icon oo-ui-icon-italic"></span>
                                                      <span class="oo-ui-labelElement-label"></span>
                                                      <span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span>
                                                    </a>
                                                  </span>
                                                </div>
                                                <div class="group group-insert" rel="insert">
                                                  <span  data-toggle="modal" data-target="#myModal"  class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="link">
                                                    <a class="oo-ui-buttonElement-button" role="button" title="Link" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-link"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span>
                                                    </a>
                                                  </span>
                                                  <span  data-toggle="modal" data-target="#myModal"  class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="file"><a class="oo-ui-buttonElement-button" role="button" title="Embedded file" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-image"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                  </span>
                                                  <span  data-toggle="modal" data-target="#myModal"  class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="reference"><a class="oo-ui-buttonElement-button" role="button" title="Reference" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-reference"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                  </span>
                                                  <span  data-toggle="modal" data-target="#myModal"  class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="template-wizard"><a class="oo-ui-buttonElement-button" role="button" title="Insert a template" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-puzzle"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                  </span>
                                                </div>
                                                <div  data-toggle="modal" data-target="#myModal"  class="group group-codemirror" rel="codemirror"><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-toggleWidget oo-ui-toggleWidget-off oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-toggleButtonWidget" aria-disabled="false" rel="CodeMirror" id="mw-editbutton-codemirror"><a class="oo-ui-buttonElement-button" role="button" aria-pressed="false" tabindex="0" aria-disabled="false" title="Syntax highlighting"><span class="oo-ui-iconElement-icon oo-ui-icon-highlight"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tabs">
                                                <span class="tab tab-advanced" rel="advanced">
                                          <a href="#" role="button" aria-pressed="true" aria-controls="wikiEditor-section-advanced" class="">Advanced</a>
                                        </span>
                                                <span class="tab tab-help" rel="help">
                                            <a href="#" role="button" aria-pressed="false"   aria-controls="wikiEditor-section-help" class="">Help</a>
                                          </span>
                                            </div>
                                            <div class="sections">
                                                <div class="toolbar section section-advanced section-hidden" rel="advanced" id="wikiEditor-section-advanced" aria-expanded="false">
                                                    <div class="group group-heading" rel="heading">
                                                        <div rel="heading" class="tool tool-select"><a class="label" href="#">Heading</a>
                                                            <div class="menu">
                                                                <div class="options"><a class="option" rel="heading-2" href="#">Level 2</a><a class="option" rel="heading-3" href="#">Level 3</a><a class="option" rel="heading-4" href="#">Level 4</a><a class="option" rel="heading-5" href="#">Level 5</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="group group-format" rel="format"><span class="label">Format</span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="ulist"><a class="oo-ui-buttonElement-button" role="button" title="Bulleted list" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-listBullet"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="olist"><a class="oo-ui-buttonElement-button" role="button" title="Numbered list" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-listNumbered"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="nowiki"><a class="oo-ui-buttonElement-button" role="button" title="No wiki formatting" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-noWikiText"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="newline"><a class="oo-ui-buttonElement-button" role="button" title="New line" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-newline"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span>
                                                    </div>
                                                    <div class="group group-size" rel="size"><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="big"><a class="oo-ui-buttonElement-button" role="button" title="Big" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-bigger"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="small"><a class="oo-ui-buttonElement-button" role="button" title="Small" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-smaller"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="superscript"><a class="oo-ui-buttonElement-button" role="button" title="Superscript" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-superscript"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="subscript"><a class="oo-ui-buttonElement-button" role="button" title="Subscript" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-subscript"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span>
                                                    </div>
                                                    <div class="group group-insert" rel="insert"><span class="label">Insert</span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="gallery"><a class="oo-ui-buttonElement-button" role="button" title="Picture gallery" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-imageGallery"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="redirect"><a class="oo-ui-buttonElement-button" role="button" title="Redirect" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-articleRedirect"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="table"><a class="oo-ui-buttonElement-button" role="button" title="Table" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-table"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span>
                                                    </div>
                                                    <div class="group group-search" rel="search"><span class="tool oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-iconElement oo-ui-buttonWidget" aria-disabled="false" rel="replace"><a class="oo-ui-buttonElement-button" role="button" title="Search and replace" tabindex="0" aria-disabled="false" rel="nofollow"><span class="oo-ui-iconElement-icon oo-ui-icon-articleSearch"></span><span class="oo-ui-labelElement-label"></span><span class="oo-ui-indicatorElement-indicator oo-ui-indicatorElement-noIndicator"></span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="booklet section section-help section-hidden" rel="help" id="wikiEditor-section-help" aria-expanded="false">
                                                    <div class="index">
                                                        <div rel="format" class="current">Formatting</div>
                                                        <div rel="link">Links</div>
                                                        <div rel="heading">Headings</div>
                                                        <div rel="list">Lists</div>
                                                        <div rel="file">Files</div>
                                                        <div rel="reference">References</div>
                                                        <div rel="discussion">Discussion</div>
                                                    </div>
                                                    <div class="pages">
                                                        <div class="page page-format page-table" rel="format" style="">
                                                            <table class="table-format">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <th>What you type</th>
                                                                        <th>What you get</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell cell-description"><span>Italic</span></td>
                                                                        <td class="cell cell-syntax"><span>''Italic text''</span></td>
                                                                        <td class="cell cell-result"><span><em>Italic text</em></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell cell-description"><span>Bold</span></td>
                                                                        <td class="cell cell-syntax"><span>'''Bold text'''</span></td>
                                                                        <td class="cell cell-result"><span><strong>Bold text</strong></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell cell-description"><span>Bold &amp; italic</span></td>
                                                                        <td class="cell cell-syntax"><span>'''''Bold &amp; italic text'''''</span></td>
                                                                        <td class="cell cell-result"><span><strong><em>Bold &amp; italic text</em></strong></span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="page page-link" rel="link" style="display: none;"></div>
                                                        <div class="page page-heading" rel="heading" style="display: none;"></div>
                                                        <div class="page page-list" rel="list" style="display: none;"></div>
                                                        <div class="page page-file" rel="file" style="display: none;"></div>
                                                        <div class="page page-reference" rel="reference" style="display: none;"></div>
                                                        <div class="page page-discussion" rel="discussion" style="display: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wikiEditor-ui-bottom">
                                        <div class="wikiEditor-ui-text">
                                            <textarea name="article" id="wpTextbox1" class="mw-editfont-monospace w-100" tabindex="1" accesskey="," cols="80" rows="25" dir="ltr"><?= $article ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="editpage-specialchars" class="nopopups" title="Click on the character or tag to insert it into the edit window">
                                <select style="margin-right: 0.3em;" title="Choose character subset">
                                    <option value="Insert">Insert</option>
                                    <option value="Wiki markup">Wiki markup</option>
                                    <option value="Symbols">Symbols</option>
                                    <option value="Latin">Latin</option>
                                    <option value="Greek">Greek</option>
                                    <option value="Cyrillic">Cyrillic</option>
                                    <option value="Hebrew">Hebrew</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="IPA (English)">IPA (English)</option>
                                    <option value="IPA">IPA</option>
                                    <option value="Math and logic">Math and logic</option>
                                </select>
                                <p class="nowraplinks" id="Insert" style="display: inline;">&nbsp; <a href="">–</a> <a href="">—</a> <a href="">°</a> <a href="">′</a> <a href="">″</a> <a href="">≈</a> <a href="">≠</a> <a href="">≤</a> <a href="">≥</a> <a href="">±</a> <a href="">−</a> <a href="">×</a> <a href="">÷</a> <a href="">←</a> <a href="">→</a> <a href="">·</a> <a href="">§</a> &nbsp; &nbsp; <b>Cite your sources:</b> <a href="">&lt;ref&gt;&lt;/ref&gt;</a> </p>
                            </div>
                            <div class="editOptions">
                                <div class="mw-summary oo-ui-layout oo-ui-labelElement oo-ui-fieldLayout oo-ui-fieldLayout-align-top" id="wpSummaryLabel">
                                    <div class="oo-ui-fieldLayout-body">
                                        <span class="oo-ui-fieldLayout-header">
                    <label class="oo-ui-labelElement-label" for="wpSummary">
                      <span style="text-align: left;">
                        <a href="..." title="Help:Edit summary">Edit summary</a>
                        <small>(Briefly describe your changes)</small>
                      </span>
                                        </label>
                                        </span>
                                        <div class="oo-ui-fieldLayout-field">
                                            <div class="oo-ui-widget oo-ui-widget-enabled oo-ui-inputWidget oo-ui-textInputWidget oo-ui-textInputWidget-type-text" id="wpSummaryWidget" aria-disabled="false">
                                                <input type="text" spellcheck="true" name="wpSummary" title="Enter a short summary [Alt+Shift+b]" id="wpSummary" class="oo-ui-inputWidget-input w-100" aria-disabled="false" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="editpage-copywarn">
                                    <p>
                                        By publishing changes, you agree to the <a href="https://foundation.wikimedia.org/wiki/Terms_of_Use" class="extiw" title="wmf:Terms of Use">Terms of Use</a>, and you irrevocably agree to release your contribution under the <a href="/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License" title="Wikipedia:Text of Creative Commons Attribution-ShareAlike 3.0 Unported License">CC BY-SA 3.0 License</a> and the <a href="/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License" title="Wikipedia:Text of the GNU Free Documentation License">GFDL</a>. You agree that a hyperlink or URL is sufficient attribution under the Creative Commons license.
                                    </p>
                                </div>
                                <div class="row">
                                    <a href="#">
                                        <button id="wpSaveWidget" type="submit" form="editform" value="Submit" class="oo-ui-widget oo-ui-widget-enabled oo-ui-inputWidget oo-ui-buttonElement oo-ui-buttonElement-framed oo-ui-labelElement oo-ui-flaggedElement-progressive oo-ui-flaggedElement-primary oo-ui-buttonInputWidget btn btn-primary">Publish Change</button>
                                    </a>
                                    <button id="wpPreviewWidget" type="button" class="oo-ui-widget oo-ui-widget-enabled oo-ui-inputWidget oo-ui-buttonElement oo-ui-buttonElement-framed oo-ui-labelElement oo-ui-buttonInputWidget btn btn-primary">Show Preview</button>
                                    <button id="wpDiffWidget" type="button" class="oo-ui-widget oo-ui-widget-enabled oo-ui-inputWidget oo-ui-buttonElement oo-ui-buttonElement-framed oo-ui-labelElement oo-ui-buttonInputWidget btn btn-primary">Show Change</button>
                                    <span class="cancelLink">
                              <span class="oo-ui-widget oo-ui-widget-enabled oo-ui-buttonElement oo-ui-buttonElement-frameless oo-ui-labelElement oo-ui-flaggedElement-destructive oo-ui-buttonWidget">
                                <a role="button" tabindex="0" aria-disabled="false" href="/wiki/Ontario" rel="nofollow" class="oo-ui-buttonElement-button">
                                  <span class="oo-ui-labelElement-label">Cancel</span>
                                    </a>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="pagefooter">
                <div class="footerlinks">
                    <a href="#">Privacy policy</a> <a href="#">About Wikipedia</a> <a href="#">Disclaimers</a> <a href="#">Contact Wikipedia</a> <a href="#">Developers</a>
                    <a href="#">Cookie statement</a>
                    <a href="#">Mobile view</a>
                </div>
            </div>

        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Notice</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            This feature not ready yet
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
</body>

</html>
