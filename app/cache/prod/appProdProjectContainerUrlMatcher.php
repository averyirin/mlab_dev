<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        // sinett_mlab_builder_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_sinett_mlab_builder_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'sinett_mlab_builder_homepage');
            }

            return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sinett_mlab_builder_homepage',);
        }
        not_sinett_mlab_builder_homepage:

        if (0 === strpos($pathinfo, '/app')) {
            // app
            if ('/app' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_app;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'app');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::indexAction',  '_route' => 'app',);
            }
            not_app:

            // app_show
            if (preg_match('#^/app/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::showAction',));
            }

            // app_new
            if ('/app/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::newAction',  '_route' => 'app_new',);
            }

            // app_create
            if ('/app/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::createAction',  '_route' => 'app_create',);
            }

            // app_edit
            if (preg_match('#^/app/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::editAction',));
            }

            // app_update
            if (preg_match('#^/app/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::updateAction',));
            }

            // app_delete
            if (preg_match('#^/app/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::deleteAction',));
            }

            // app_remove_from_appstore
            if (preg_match('#^/app/(?P<id>[^/]++)/removeAppStore$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_remove_from_appstore')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::removeAppStoreAction',));
            }

            // app_recall
            if (preg_match('#^/app/(?P<id>[^/]++)/recall$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_recall')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::recallAction',));
            }

            if (0 === strpos($pathinfo, '/app/builder')) {
                // app_builder_index
                if ('/app/builder' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_app_builder_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'app_builder_index');
                    }

                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::builderAction',  '_route' => 'app_builder_index',);
                }
                not_app_builder_index:

                // app_builder_editor
                if (preg_match('#^/app/builder/(?P<id>[^/]++)/(?P<page_num>[^/]++)/build$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_editor')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::buildAppAction',));
                }

                // app_builder_page_get
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<page_num>[^/]++)/(?P<uid>[^/]++)/(?P<app_open_mode>[^/]++)/page_get$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_get')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::getPageAction',  'app_open_mode' => false,));
                }

                // app_builder_editor_closed
                if (preg_match('#^/app/builder/(?P<uid>[^/]++)/editor_closed$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_editor_closed')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::closeEditorAction',));
                }

                // app_builder_page_save
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<page_num>[^/]++)/(?P<old_checksum>[^/]++)/page_put$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_save')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::putPageAction',));
                }

                // app_builder_page_new
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<uid>[^/]++)/page_new$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_new')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::newPageAction',));
                }

                // app_builder_page_copy
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<page_num>[^/]++)/(?P<uid>[^/]++)/page_copy$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_copy')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::copyPageAction',));
                }

                // app_builder_page_delete
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<page_num>[^/]++)/(?P<uid>[^/]++)/page_delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::deletePageAction',));
                }

                // app_builder_page_reorder
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<from_page>[^/]++)/(?P<to_page>[^/]++)/(?P<uid>[^/]++)/page_reorder$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_page_reorder')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::reorderPageAction',));
                }

                // app_builder_app_unlock
                if ('/app/builder/app_removelocks' === $pathinfo) {
                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::removeLocksAction',  '_route' => 'app_builder_app_unlock',);
                }

                // app_builder_copy_app
                if (preg_match('#^/app/builder/(?P<id>[^/]++)/copy$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_copy_app')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::copyAppAction',));
                }

                // app_builder_component_added
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<comp_id>[^/]++)/component_added$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_component_added')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::componentAddedAction',));
                }

                // app_builder_component_upload
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<comp_id>[^/]++)/component_upload$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_component_upload')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::componentUploadAction',));
                }

                // app_builder_feature_add
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<comp_id>[^/]++)/feature_add$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_feature_add')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::featureAddAction',));
                }

                // app_builder_storage_plugin_add
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<storage_plugin_id>[^/]++)/storage_plugin_add$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_storage_plugin_add')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::storagePluginAddAction',));
                }

                // app_builder_load_variables
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<page_num>[^/]++)/load_variables$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_load_variables')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::loadBuilderVariablesAction',));
                }

                // app_builder_load_components
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/load_components$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_load_components')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::loadBuilderComponentsAction',));
                }

                // app_builder_get_uploaded_files
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<file_type>[^/]++)/get_uploaded_files$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_builder_get_uploaded_files')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::getUploadedFilesAction',));
                }

                // app_list_set_active_version
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<version>[^/]++)/set_active_version$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_list_set_active_version')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::setActiveVersionAction',));
                }

                // app_list_create_new_version
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/(?P<increment>[^/]++)/create_new_version$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_list_create_new_version')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::createNewVersionAction',));
                }

                // app_list_create_new_branch
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/create_new_branch$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_list_create_new_branch')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::createNewBranchAction',));
                }

                // app_preview
                if (preg_match('#^/app/builder/(?P<app_id>[^/]++)/preview$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_preview')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::appPreviewAction',));
                }

            }

            // app_import_file
            if ('/app/importFile' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AppController::importFileAction',  '_route' => 'app_import_file',);
            }

        }

        if (0 === strpos($pathinfo, '/component')) {
            // component
            if ('/component' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_component;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'component');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::indexAction',  '_route' => 'component',);
            }
            not_component:

            // component_show
            if (preg_match('#^/component/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'component_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::showAction',));
            }

            // component_new
            if ('/component/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::newAction',  '_route' => 'component_new',);
            }

            // component_create
            if ('/component/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::createAction',  '_route' => 'component_create',);
            }

            // component_edit
            if (preg_match('#^/component/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'component_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::editAction',));
            }

            // component_update
            if (preg_match('#^/component/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'component_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::updateAction',));
            }

            // component_delete
            if (preg_match('#^/component/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'component_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::deleteAction',));
            }

            // component_toggle_state
            if (preg_match('#^/component/(?P<id>[^/]++)/toggle_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'component_toggle_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentController::toggleStateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/group')) {
            // group
            if ('/group' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_group;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'group');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::indexAction',  '_route' => 'group',);
            }
            not_group:

            // group_show
            if (preg_match('#^/group/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::showAction',));
            }

            // group_new
            if ('/group/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::newAction',  '_route' => 'group_new',);
            }

            // group_create
            if ('/group/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::createAction',  '_route' => 'group_create',);
            }

            // group_edit
            if (preg_match('#^/group/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::editAction',));
            }

            // group_update
            if (preg_match('#^/group/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::updateAction',));
            }

            // group_delete
            if (preg_match('#^/group/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::deleteAction',));
            }

            // group_toggle_state
            if (preg_match('#^/group/(?P<id>[^/]++)/toggle_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_toggle_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\GroupController::toggleStateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/help')) {
            // help
            if ('/help' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_help;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'help');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::indexAction',  '_route' => 'help',);
            }
            not_help:

            // help_show
            if (preg_match('#^/help/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::showAction',));
            }

            // help_new
            if ('/help/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::newAction',  '_route' => 'help_new',);
            }

            // help_create
            if ('/help/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::createAction',  '_route' => 'help_create',);
            }

            // help_edit
            if (preg_match('#^/help/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::editAction',));
            }

            // help_update
            if (preg_match('#^/help/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::updateAction',));
            }

            // help_delete
            if (preg_match('#^/help/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::deleteAction',));
            }

            // help_getHtml
            if (preg_match('#^/help/(?P<route>[^/]++)/get_html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_getHtml')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::getHtmlAction',));
            }

            // help_get_component_helpfile
            if (preg_match('#^/help/(?P<comp_id>[^/]++)/get_component_helpfile$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_get_component_helpfile')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\HelpController::getComponentHelpfileAction',));
            }

        }

        if (0 === strpos($pathinfo, '/menu')) {
            // menu
            if ('/menu' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_menu;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'menu');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::indexAction',  '_route' => 'menu',);
            }
            not_menu:

            // menu_show
            if (preg_match('#^/menu/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::showAction',));
            }

            // menu_new
            if ('/menu/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
            }

            // menu_create
            if ('/menu/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::createAction',  '_route' => 'menu_create',);
            }

            // menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::editAction',));
            }

            // menu_update
            if (preg_match('#^/menu/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::updateAction',));
            }

            // menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\MenuController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/services')) {
            if (0 === strpos($pathinfo, '/services/mkt')) {
                // mkt_get_tagged_users
                if (0 === strpos($pathinfo, '/services/mktGetTaggedUsers') && preg_match('#^/services/mktGetTaggedUsers/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<tag>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_get_tagged_users')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktGetTaggedUsersAction',));
                }

                // mkt_submit_app_details
                if (0 === strpos($pathinfo, '/services/mktSubmitAppDetails') && preg_match('#^/services/mktSubmitAppDetails/(?P<window_uid>[^/]++)/(?P<app_details>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_submit_app_details')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktSubmitAppDetailsAction',));
                }

                // mkt_upload_app_file
                if (0 === strpos($pathinfo, '/services/mktUploadAppFile') && preg_match('#^/services/mktUploadAppFile/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<app_uid>[^/]++)/(?P<replace_existing>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_upload_app_file')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktUploadAppFileAction',));
                }

                // mkt_publish_app
                if (0 === strpos($pathinfo, '/services/mktPublishApp') && preg_match('#^/services/mktPublishApp/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<app_uid>[^/]++)/(?P<version>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_publish_app')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktPublishAppAction',));
                }

                // mkt_unpublish_app
                if (0 === strpos($pathinfo, '/services/mktUnpublishApp') && preg_match('#^/services/mktUnpublishApp/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<app_uid>[^/]++)/(?P<version>[^/]++)/(?P<action>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_unpublish_app')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktUnpublishAppAction',));
                }

                // mkt_login
                if (0 === strpos($pathinfo, '/services/mktLogin') && preg_match('#^/services/mktLogin/(?P<window_uid>[^/]++)/(?P<username>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_login')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktLoginAction',));
                }

                // mkt_create_user
                if (0 === strpos($pathinfo, '/services/mktCreateUser') && preg_match('#^/services/mktCreateUser/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<user_details>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_create_user')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktCreateUserAction',));
                }

                // mkt_get_new_users
                if (0 === strpos($pathinfo, '/services/mktGetNewUsers') && preg_match('#^/services/mktGetNewUsers/(?P<window_uid>[^/]++)/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_get_new_users')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktGetNewUsersAction',));
                }

                // mkt_set_user_state
                if (0 === strpos($pathinfo, '/services/mktSetUserState') && preg_match('#^/services/mktSetUserState/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<app_uid>[^/]++)/(?P<state>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_set_user_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktSetUserStateAction',));
                }

                // mkt_set_tagged_users_state
                if (0 === strpos($pathinfo, '/services/mktsetTaggedUsersState') && preg_match('#^/services/mktsetTaggedUsersState/(?P<window_uid>[^/]++)/(?P<token>[^/]++)/(?P<tag>[^/]++)/(?P<state>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mkt_set_tagged_users_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::mktSetTaggedUsersStateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/services/cmp')) {
                if (0 === strpos($pathinfo, '/services/cmpGetAppS')) {
                    // cmp_get_app_status
                    if (0 === strpos($pathinfo, '/services/cmpGetAppStatus') && preg_match('#^/services/cmpGetAppStatus/(?P<window_uid>[^/]++)(?:/(?P<app_id>[^/]++)(?:/(?P<app_version>[^/]++)(?:/(?P<platform>[^/]++))?)?)?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmp_get_app_status')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cmpGetAppStatusAction',  'app_id' => NULL,  'app_version' => NULL,  'platform' => NULL,));
                    }

                    // cmp_get_app_source
                    if (0 === strpos($pathinfo, '/services/cmpGetAppSource') && preg_match('#^/services/cmpGetAppSource/(?P<window_uid>[^/]++)(?:/(?P<app_id>[^/]++)(?:/(?P<app_version>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmp_get_app_source')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cmpGetAppSourceAction',  'app_id' => NULL,  'app_version' => NULL,));
                    }

                }

                // cmp_upload_website
                if (0 === strpos($pathinfo, '/services/cmpUploadWebsite') && preg_match('#^/services/cmpUploadWebsite/(?P<window_uid>[^/]++)(?:/(?P<app_id>[^/]++)(?:/(?P<app_version>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmp_upload_website')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cmpUploadWebsiteAction',  'app_id' => NULL,  'app_version' => NULL,));
                }

                if (0 === strpos($pathinfo, '/services/cmpGet')) {
                    // cmp_get_app_process
                    if (0 === strpos($pathinfo, '/services/cmpGetAppProcess') && preg_match('#^/services/cmpGetAppProcess/(?P<window_uid>[^/]++)/(?P<app_id>[^/]++)/(?P<app_version>[^/]++)/(?P<platform>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmp_get_app_process')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cmpGetAppProcessAction',));
                    }

                    // cmp_get_list_compiled_apps
                    if (0 === strpos($pathinfo, '/services/cmpGetListCompiledApps') && preg_match('#^/services/cmpGetListCompiledApps/(?P<app_id>[^/]++)/(?P<app_version>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmp_get_list_compiled_apps')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cmpGetListCompiledAppsAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/template')) {
                // template
                if ('/template' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_template;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'template');
                    }

                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::indexAction',  '_route' => 'template',);
                }
                not_template:

                // template_show
                if (preg_match('#^/template/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::showAction',));
                }

                // template_new
                if ('/template/new' === $pathinfo) {
                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::newAction',  '_route' => 'template_new',);
                }

                // template_create
                if ('/template/create' === $pathinfo) {
                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::createAction',  '_route' => 'template_create',);
                }

                // template_edit
                if (preg_match('#^/template/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::editAction',));
                }

                // template_update
                if (preg_match('#^/template/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::updateAction',));
                }

                // template_update_group
                if (preg_match('#^/template/(?P<template_id>[^/]++)/update_groups$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_update_group')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::updateGroupsAction',));
                }

                // template_delete
                if (preg_match('#^/template/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::deleteAction',));
                }

                // template_toggle_state
                if (preg_match('#^/template/(?P<id>[^/]++)/toggle_state$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_toggle_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TemplateController::toggleStateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/tracking')) {
                // tracking
                if ('/tracking' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_tracking;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'tracking');
                    }

                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::indexAction',  '_route' => 'tracking',);
                }
                not_tracking:

                // tracking_show
                if (preg_match('#^/tracking/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracking_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::showAction',));
                }

                // tracking_new
                if ('/tracking/new' === $pathinfo) {
                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::newAction',  '_route' => 'tracking_new',);
                }

                // tracking_create
                if ('/tracking/create' === $pathinfo) {
                    return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::createAction',  '_route' => 'tracking_create',);
                }

                // tracking_edit
                if (preg_match('#^/tracking/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracking_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::editAction',));
                }

                // tracking_update
                if (preg_match('#^/tracking/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracking_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::updateAction',));
                }

                // tracking_delete
                if (preg_match('#^/tracking/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracking_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\TrackingController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if ('/user' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_user;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ('/user/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ('/user/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::updateAction',));
            }

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::deleteAction',));
            }

            // user_toggle_state
            if (preg_match('#^/user/(?P<id>[^/]++)/toggle_state$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_toggle_state')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\UserController::toggleStateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/componentgroup')) {
            // componentgroup
            if ('/componentgroup' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_componentgroup;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'componentgroup');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::indexAction',  '_route' => 'componentgroup',);
            }
            not_componentgroup:

            // componentgroup_show
            if (preg_match('#^/componentgroup/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_show')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::showAction',));
            }

            // componentgroup_new
            if ('/componentgroup/new' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::newAction',  '_route' => 'componentgroup_new',);
            }

            // componentgroup_create
            if ('/componentgroup/create' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::createAction',  '_route' => 'componentgroup_create',);
            }

            // componentgroup_edit
            if (preg_match('#^/componentgroup/(?P<component_id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_edit')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::editAction',));
            }

            // componentgroup_update_groups
            if (preg_match('#^/componentgroup/(?P<component_id>[^/]++)/update_groups$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_update_groups')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::updateGroupsAction',));
            }

            // componentgroup_admin_new
            if (preg_match('#^/componentgroup/(?P<component_id>[^/]++)/admin_new$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_admin_new')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::adminNewAction',));
            }

            // componentgroup_update
            if (preg_match('#^/componentgroup/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_update')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::updateAction',));
            }

            // componentgroup_delete
            if (preg_match('#^/componentgroup/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'componentgroup_delete')), array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ComponentGroupController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_apps
            if ('/admin/apps' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AdminController::appsAction',  '_route' => 'admin_apps',);
            }

            // admin_users
            if ('/admin/users' === $pathinfo) {
                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AdminController::usersAction',  '_route' => 'admin_users',);
            }

        }

        // system
        if ('/system' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_system;
            } else {
                return $this->redirect($rawPathinfo.'/', 'system');
            }

            return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\AdminController::systemAction',  '_route' => 'system',);
        }
        not_system:

        // index
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'SinettMLABBuilderBundle:System:index',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/callback/csApp')) {
            // cb_cmp_created_app
            if ('/callback/csAppCreated' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cb_cmp_created_app;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cb_cmp_created_app');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cbCmpCreatedAppAction',  '_route' => 'cb_cmp_created_app',);
            }
            not_cb_cmp_created_app:

            // cb_cmp_verified_app
            if ('/callback/csAppVerified' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cb_cmp_verified_app;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cb_cmp_verified_app');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cbCmpVerifiedAppAction',  '_route' => 'cb_cmp_verified_app',);
            }
            not_cb_cmp_verified_app:

            // cb_cmp_compiled_app
            if ('/callback/csAppCompiled' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cb_cmp_compiled_app;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cb_cmp_compiled_app');
                }

                return array (  '_controller' => 'Sinett\\MLAB\\BuilderBundle\\Controller\\ServicesController::cbCmpCompiledAppAction',  '_route' => 'cb_cmp_compiled_app',);
            }
            not_cb_cmp_compiled_app:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
