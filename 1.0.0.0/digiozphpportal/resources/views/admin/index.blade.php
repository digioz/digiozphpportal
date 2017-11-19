@extends('admin.app')

@section('title', 'Dashboard')
@section('content')
<h2>Dashboard</h2>

<p>&nbsp;</p>

<table style="width:95%;">
    <tr>
        <td>
            <div style="text-align:center;padding-bottom:20px;">
                <a href="{{ route('admin.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/Home.png') }}" border="0" /><br />
                    Dashboard
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('pagemanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/PageManager.png') }}" border="0" /><br />
                    Page Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('configurationmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/Configuration.png') }}" border="0" /><br />
                    Configuration
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('databaseutilities.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/DatabaseUtilities.png') }}" border="0" /><br />
                    Database Utilities
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('filemanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/FileManager.png') }}" border="0" /><br />
                    File Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('pluginmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/PluginManager.png') }}" border="0" /><br />
                    Plugin Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/ForumManager.png') }}" border="0" /><br />
                    Forum Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('pollmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/PollManager.png') }}" border="0" /><br />
                    Poll Manager
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('statisticsmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/Statistics.png') }}" border="0" /><br />
                    Statistics
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('menumanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/MenuManager.png') }}" border="0" /><br />
                    Menu Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('usermanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/UserManager.png') }}" border="0" /><br />
                    User Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('userrolemanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/UserRoleManager.png') }}" border="0" /><br />
                    User Role Manager
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('announcementmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/Announcements.png') }}" border="0" /><br />
                    Announcements
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('picturemanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/PictureManager.png') }}" border="0" /><br />
                    Picture Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('videomanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/VideoManager.png') }}" border="0" /><br />
                    Video Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('linkmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/LinkManager.png') }}" border="0" /><br />
                    Link Manager
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('chatmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/ChatManager.png') }}" border="0" /><br />
                    Chat Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('productmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/product.png') }}" border="0" /><br />
                    Product Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('productcategorymanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/product_category.png') }}" border="0" /><br />
                    Product Category
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('ordermanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/order.png') }}" border="0" /><br />
                    Order Manager
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('mailinglistmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/MailingList.png') }}" border="0" /><br />
                    Mailing List
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('modulemanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/ModuleManager.png') }}" border="0" /><br />
                    Module Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('slideshowmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/SlideShow.png') }}" border="0" /><br />
                    Slide Show Manager
                </a>
            </div>
        </td>
        <td>
            <div style="text-align: center; padding-bottom: 20px;">
                <a href="{{ route('commentmanager.index') }}">
                    <img class="img-thumbnail" alt="64x64" style="width: 64px; height: 64px;" src="{{ asset('Content/images/icons/64x64/Comments.png') }}" border="0" /><br />
                    Comment Manager
                </a>
            </div>
        </td>
    </tr>
</table>
@endsection