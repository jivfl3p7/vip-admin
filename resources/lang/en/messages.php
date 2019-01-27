<?php

return [
	'daemon-no-mock-response'         => 'Could not find mocked response for :path',
	'daemon-no-steam-contact'         => 'Could not contact Steam servers: :message',
	'daemon-no-steam-contact-unknown' => 'Could not contact Steam servers: Unknown error message',

	'email-new-order-created-subject'   => 'New Order created!',
	'email-new-order-created-preheader' => 'You just created an order with ID: #:id',
	'email-new-order-created-prelink'   => 'You just created an order with ID: #:id',
	'email-new-order-created-link'      => 'Order details',
	'email-new-order-created-postlink'  => 'Click the link to see the details in VIP-Admin',

	'email-new-token-created-subject'   => 'New Token generated!',
	'email-new-token-created-preheader' => 'You just generated a new token: :id',
	'email-new-token-created-prelink'   => 'You just generated a new token: :id',
	'email-new-token-created-link'      => 'Token details',
	'email-new-token-created-postlink'  => 'Click the link to see the details in VIP-Admin',

	'email-token-used-subject'   => 'Token used!',
	'email-token-used-preheader' => 'Your token :token has been used by :user',
	'email-token-used-prelink'   => 'Your token :token has been used by :user',
	'email-token-used-link'      => 'Token details',
	'email-token-used-postlink'  => 'Click the link to see the details in VIP-Admin',

	'email-tradeoffer-sent-subject'   => 'Trade Offer for #:id sent!',
	'email-tradeoffer-sent-preheader' => 'We just sent a Trade Offer for your Order #:id just registered!',
	'email-tradeoffer-sent-prelink'   => 'We just sent a Trade Offer for your Order #:id just registered!',
	'email-tradeoffer-sent-link'      => 'Order details',
	'email-tradeoffer-sent-postlink'  => 'Click the link to see the details in VIP-Admin',

	'email-user-created-subject'   => ':username just registered!',
	'email-user-created-preheader' => 'User :username just registered',
	'email-user-created-prelink'   => 'User :username just registered',
	'email-user-created-link'      => 'Users list',
	'email-user-created-postlink'  => 'Click the link to see the details in VIP-Admin',

	'form-confirmation-starting-period-help' => 'When the activation starts to be valid.',
	'form-confirmation-ending-period-help'   => 'When the activation stops to be valid.',
	'form-app-public-id-size'                => 'Public ID Size',
	'form-app-public-id-size-help'           => 'How many characters Public IDs should have.',
	'form-app-extra-tokens-expiration'       => 'Extra token expiration',
	'form-app-extra-tokens-expiration-help'  => 'How long should Extra Tokens be valid for.',
	'form-app-extra-tokens-duration'         => 'Extra token duration',
	'form-app-extra-tokens-duration-help'    => 'How many days should an Extra Token give.',
	'form-app-duration-per-token'            => 'Order duration per extra token',
	'form-app-duration-per-token-help'       => 'How many days an Order should be to give the Owner an Extra Token.',
	'form-app-token-size'                    => 'Token Size',
	'form-app-token-size-help'               => 'How many characters Tokens should have.',
	'form-app-max-order-price'               => 'Maximum Order Price',
	'form-app-max-order-price-help'          => 'What\'s the maximum Order price allowed.',
	'form-app-max-order-duration'            => 'Maximum Order Duration',
	'form-app-max-order-duration-help'       => 'What\'s the maximum Order duration allowed.',
	'form-app-min-order-duration'            => 'Minimum Order Duration',
	'form-app-min-order-duration-help'       => 'What\'s the minimum Order duration allowed.',
	'form-app-max-order-date'                => 'Maximum Order Date',
	'form-app-max-order-date-help'           => 'What\'s the date limit allowed.',
	'form-app-order-expiration-time'         => 'Order Expiration Time',
	'form-app-order-expiration-time-help'    => 'How long should we wait Trade Offers to be accepted.',
	'form-app-cost-per-day'                  => 'Cost per day',
	'form-app-cost-per-day-help'             => 'The cost per day using Steam Items.',
	'form-app-global-home'                   => 'Global Home',
	'form-app-not-accepted-home'             => 'Not Accepted Home',
	'form-app-accepted-home'                 => 'Accepted Home',

	'form-order-duration-help'     => 'How many days this order is for.',
	'form-order-extra-tokens-help' => 'How many tokens the User will be rewarded.',

	'form-server-name-help'         => 'A way to identify the server.',
	'form-server-ip-help'           => 'IP Address of the server.',
	'form-server-port-help'         => 'Port number used to connect to the server.',
	'form-server-password-help'     => 'RCON Password.',
	'form-server-ftp-host-help'     => 'FTP Hostname or IP to connect.',
	'form-server-ftp-user-help'     => 'FTP Username used to sync server files.',
	'form-server-ftp-password-help' => 'Password to be used.',
	'form-server-ftp-root-help'     => 'What folder in relation to the base folder should we sync the files.',

	'form-token-value'           => 'Token Value',
	'form-token-value-help'      => 'The characters that make the token.',
	'form-token-duration'        => 'Duration',
	'form-token-duration-help'   => 'The duration that the token will give.',
	'form-token-expiration-help' => 'How long should the token be valid for.',
	'form-token-note-help'       => 'A friendly note.',

	'controller-auth-banned' => 'You are banned from using VIP-Admin permanently!',

	'controller-confirmation-already-exists'   => 'We already have a activation for this order is our database!',
	'controller-confirmation-creation-success' => 'Activation created with success!',
	'controller-confirmation-creation-error'   => 'Error saving activation to database!',
	'controller-confirmation-update-success'   => 'Activation :id was updated',
	'controller-confirmation-update-error'     => 'Could not update activation :id!',
	'controller-confirmation-delete-success'   => 'Activation :id deleted successfully!',
	'controller-confirmation-delete-error'     => 'Error while trying to delete activation :id from database!',
	'controller-confirmation-restore-success'  => 'Activation :id restored successfully!',
	'controller-confirmation-restore-error'    => 'Error while trying to restore activation :id from database!',

	'controller-opskins-invalid-data'   => 'Invalid data passed to updater!',
	'controller-opskins-update-success' => 'OPSkins cache was refreshed with success. Added a total of :amount items to the database',

	'controller-order-update-success' => 'Order :id was updated!',
	'controller-order-update-error'   => 'Order :id could not be updated!',
	'controller-order-delete-success' => 'Order :id was deleted!',
	'controller-order-delete-error'   => 'Order :id could not be deleted!',

	'controller-server-delete-success'   => 'Server deleted!',
	'controller-server-delete-error'     => 'Could not delete server from database',
	'controller-server-update-success'   => 'Server was updated with success!',
	'controller-server-update-error'     => 'Could not save server changes to database',
	'controller-server-creation-success' => 'Server added to database successfully!',
	'controller-server-creation-error'   => 'Could not save server to database!',

	'controller-steam-order-too-many-items'             => 'Your order has more than :max items, <strong>please try again with fewer items</strong> (this is enforced to avoid errors from Steam\'s API)',
	'controller-steam-order-above-max-price'            => 'Your order is above the maximum allowed price of $:value!',
	'controller-steam-order-below-min-duration'         => 'Current order is below the minimum allowed of :days days',
	'controller-steam-order-above-max-duration'         => 'Your order is above the maximum allowed duration of :days days!',
	'controller-steam-order-creation-success'           => 'Order created successfully!',
	'controller-steam-order-creation-error'             => 'Error saving orders to database!',
	'controller-steam-order-missing'                    => 'Could not find Steam Order',
	'controller-steam-order-missing-details'            => 'Could not find details of order #:id!',
	'controller-steam-order-tradeoffer-exists'          => 'There is already a trade offer live for this order!',
	'controller-steam-order-tradeoffer-message'         => 'Order #:id for :duration days.',
	'controller-steam-order-tradeoffer-message-admin'   => ' This TradeOffer was sent manually by an Admin!',
	'controller-steam-order-admin-will-sent'            => 'We could not sent the Trade Offer for your Order because the system did not get a response from Steam Servers. <br><strong>An Admin will re-send it manually (via VIP-Admin) in the next 24 hours</strong>, be sure to check your pending Trade Offers and remember to <strong>verify the Order ID in the Trade Offer message!</strong><br>If you save your email in the <strong><a href=":settings">Settings</a></strong> page, <strong>we can send an email once the Trade Offer is manually sent!</strong>',
	'controller-steam-order-tradeoffer-error'           => 'Error trying to send a Steam Trade Offer.',
	'controller-steam-order-tradeoffer-details-success' => 'Trade offer sent! Please notice you have :time minutes to accept it before this order expires!',
	'controller-steam-order-tradeoffer-details-error'   => 'Could update your Order with Trade Offer details! <strong>If you received a Trade Offer DO NOT ACCEPT IT</strong> as we have no ID to track it!',

	'controller-token-cannot-generate-extra'          => 'You cannot generate more tokens!',
	'controller-token-extra-token-note'               => 'This extra token was generated by :user',
	'controller-token-extra-token-generation-success' => 'Extra token generated: :token',
	'controller-token-cannot-edit-used'               => 'You cannot edit an already used token',
	'controller-token-update-success'                 => 'Token :token updated successfully',
	'controller-token-update-error'                   => 'Token :token could not be updated!',
	'controller-token-delete-success'                 => 'Token :id deleted successfully!',
	'controller-token-delete-error'                   => 'Error while trying to delete token :id from database!',
	'controller-token-restore-success'                => 'Token :id restored successfully!',
	'controller-token-restore-error'                  => 'Error while trying to restore token :id from database!',

	'controller-token-store-not-valid'        => 'Given token is not valid!',
	'controller-token-store-not-specified'    => 'No token specified!',
	'controller-token-store-creation-success' => 'Token :id created!',
	'controller-token-store-creation-error'   => 'Could not store token :id in database!',

	'controller-user-admins-cannot-be-banned' => 'Admins cannot be banned!',
	'controller-user-banned-success'          => 'User :user was banned!',
	'controller-user-banned-error'            => 'Could not ban user :user!',
	'controller-user-unbanned-success'        => 'User :user was unbanned!',
	'controller-user-unbanned-error'          => 'Could not unban user :user!',
	'controller-user-settings-update-success' => 'Updated settings successfully.',
	'controller-user-settings-update-error'   => 'Error updating settings!',

	'middleware-must-accept'        => 'You must accept our terms before using our platform',
	'middleware-daemon-not-logged'  => 'Our daemon server is not logged to Steam servers.',
	'middleware-daemon-not-online'  => 'Our daemon server is offline, Steam servers are unreachable!',
	'middleware-tradelink-missing'  => 'You must give us your trade link to continue!',
	'middleware-not-allowed-to-see' => 'You are not allowed to see this page: :url',

	'model-server-uploaded-updating-error' => 'Error marking activation as uploaded to server!.',
	'model-server-sync-error'              => 'Error syncing server: :message',

	'model-steam-orders-cannot-generate-confirmation' => 'Your order must have a valid token associated with to generate an activation!',

	'model-token-orders-cannot-generate-confirmation' => 'Your order must have a valid token associated with to generate an activation!',

	'time.days'    => 'day|days',
	'time.hours'   => 'hour|hours',
	'time.minutes' => 'minute|minutes',

	'confirmation-form'            => 'Activation form',
	'confirmation-show-trashed'    => 'Show trashed activations',
	'confirmation-public-id '      => 'Activation Public ID',
	'confirmation-starting-period' => 'Starting period',
	'confirmation-ending-period'   => 'Ending period',
	'confirmation-highlight-from'  => 'Highlight activations from :user',
	'confirmation-create'          => 'Activate',

	'token-show-trashed' => 'Show trashed tokens',

	'order-show-trashed' => 'Show trashed orders',
	'order-form'         => 'Order form',
	'order-public-id'    => 'Order Public ID',
	'order-type'         => 'Order Type',
	'order-details'      => 'Order details',

	'server-form'         => 'Server form',
	'server-name'         => 'Server name',
	'server-ip'           => 'IP Address',
	'server-port'         => 'Server Port',
	'server-password'     => 'RCON Password',
	'server-ftp-host'     => 'FTP Host',
	'server-ftp-user'     => 'FTP Username',
	'server-ftp-password' => 'FTP Password',
	'server-ftp-root'     => 'FTP Root',

	'steam-order-select-items'     => 'Select your items you want to trade',
	'steam-order-use-in-trade'     => 'Use this item on trade',
	'steam-order-finish-selection' => 'Finish selection!',
	'steam-order-submit-items'     => 'Submit items to trade',
	'steam-order-total-value'      => 'Total Value: $:value',
	'steam-order-total-days'       => 'Total Days: :days days',
	'steam-order-step-1'           => 'Select your items to trade',
	'steam-order-step-2'           => 'Send the trade offer',
	'steam-order-step-3'           => 'Accept the trade offer',
	'steam-order-step-4'           => 'Activate',
	'steam-order-step-5'           => 'Server files uploaded',

	'characters'            => 'character|characters',
	'currency-dollar-cents' => 'dollar cent|dollar cents',
	'save'                  => 'Save',
	'restore'               => 'Restore',
	'delete'                => 'Delete',
	'edit'                  => 'Edit',
	'username'              => 'Username',
	'state'                 => 'State',
	'actions'               => 'Actions',
	'settings'              => 'Settings',
	'account'               => 'Account',
	'home'                  => 'Home',
	'help'                  => 'Help',
	'logout'                => 'Logout',
	'duration'              => 'Duration',
	'sync'                  => 'Sync',
	'never'                 => 'Never',
	'items'                 => 'Items',
	'expiration'            => 'Expiration',
	'note'                  => 'Note',
	'step'                  => 'Step :step',
	'details'               => 'Details',
	'custom'                => 'Custom',
	'infinite'              => 'Infinite',
	'generate'              => 'Generate',
	'token'                 => 'Token|Tokens',
	'user'                  => 'User|Users',
	'administrative'        => 'Administrative',
	'owner'                 => 'Owner',
	'system'                => 'System',
	'expired'               => 'Expired',
	'name'                  => 'Name',
	'terms'                 => 'Terms',
	'accepted'              => 'Accepted',
	'not-accepted'          => 'Not Accepted',
	'ban'                   => 'Ban',
	'login'                 => 'Login',
	'unban'                 => 'Unban',
	'email'                 => 'Email',
	'lang'                  => 'Language',
	'english'               => 'English',
	'portuguese'            => 'Portuguese',
	'status'                => 'Status',

	'token-order'        => 'Token Order',
	'token-order-step-1' => 'Create Token Order',
	'token-order-step-2' => 'Submit a valid token',
	'token-order-step-3' => 'Activate',
	'token-order-step-4' => 'Server files uploaded',

	'token-form'                   => 'Token form',
	'token-form-confirmation'      => 'Token confirmation details',
	'token-custom-duration-help'   => 'The amount of days the token will give',
	'token-custom-expiration-help' => 'How many hours the token will be valid',

	'user-settings'                => 'User settings',
	'user-settings-name-help'      => 'If you want us to use your real name put it here. This is only used for display on the dashboard and emails :)',
	'user-settings-tradelink-help' => 'This is the link we will use to send trade offers. You can find your URL <a target="_blank" href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url">clicking here.</a>',
	'user-settings-email-help'     => 'We will use this email to send notifications about everything related to your account and VIP-Admin. <strong>(recommended)</strong>',
	'user-settings-lang-help'      => 'What language do you want the system to use',

	'daemon-login'        => 'Daemon login',
	'order-count'         => 'Order count',
	'confirmation-count'  => 'Activation count',
	'opskins-update-data' => 'Update OPSkins data',

	'already-used'             => 'Already used',
	'order-view-details'       => 'View order details',
	'generate-extra-tokens'    => 'Generate extra tokens',
	'redeem-user'              => 'Redeem user',
	'custom-duration'          => 'Custom Duration',
	'custom-expiration'        => 'Custom Expiration',
	'viewing-token'            => 'Viewing token',
	'confirm-token'            => 'Confirm Token',
	'expiration-date'          => 'Expiration Date',
	'expiration-remaining'     => 'Expiration Remaining',
	'use-token'                => 'Use token',
	'current-state'            => 'Current state',
	'joined-date'              => 'Joined date',
	'trade-link'               => 'Trade link',
	'last-update'              => 'Last Update',
	'last-sync'                => 'Last Sync',
	'extra-tokens'             => 'Extra tokens',
	'view-order'               => 'View order',
	'toggle-navigation'        => 'Toggle navigation',
	'navbar-brand'             => 'VIP Admin Dashboard',
	'daemon-online'            => 'Daemon is online',
	'daemon-offline'           => 'Daemon is offline',
	'daemon-connected'         => 'Daemon is connect to Steam',
	'daemon-disconnected'      => 'Daemon is disconnected from Steam servers',
	'buy-vip'                  => 'Buy VIP',
	'buy-vip-with-skins'       => 'Buy VIP with Skins',
	'buy-vip-with-tokens'      => 'Buy VIP with Tokens',
	'buy-vip-with-mp'          => 'Buy VIP with MercadoPago',
	'order'                    => 'Order|Orders',
	'confirmation'             => 'Activation|Activations',
	'generate-tokens'          => 'Generate token|Generate tokens',
	'server-list'              => 'Server list',
	'opskins-updater'          => 'OPSkins Updater',
	'applications-settings'    => 'Application Settings',
	'send-tradeoffer'          => 'Send TradeOffer',
	'open-tradeoffer'          => 'Open TradeOffer',
	'recheck'                  => 'Recheck',
	'created-at'               => 'Created at',
	'sync-all'                 => 'Sync all',
	'synchronized-all-servers' => 'All servers were synchronized!',

	'model-mp-orders-cannot-generate-confirmation' => 'This MercadoPago order is not able to generate activations.',

	'mp-orders-create'          => 'MercadoPago Order Form',
	'mp-order-create-submit'    => 'Create MercadoPago Order',
	'mp-order-select-duration'  => 'Select VIP duration',
	'mp-order-duration-invalid' => 'Duration is not valid for MercadoPago orders.',
	'mp-order-item-title'       => 'VIP on my CS:GO server for :duration days.',

	'controller-mp-order-creation-success' => 'Order created successfully!',
	'controller-mp-order-creation-error'   => 'Error saving order details to database!',

	'mp-order-step-1' => 'Create payment request',
	'mp-order-step-2' => 'Pay the request',
	'mp-order-step-3' => 'Activate',
	'mp-order-step-4' => 'Server synchronization',

	'mp_preference_id' => 'MercadoPago Preference ID',
	'mp_order_id'      => 'MercadoPago Order ID',
	'mp_payment_id'    => 'MercadoPago Payment ID',

];
