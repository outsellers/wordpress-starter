<?php


namespace IDP\Helper\Constants;

class MoIDPConstants
{
    const HOSTNAME = "\x68\164\x74\x70\x73\72\x2f\x2f\x6c\x6f\x67\151\x6e\56\170\145\x63\165\x72\x69\146\x79\56\x63\x6f\155";
    const DEFAULT_CUSTOMER_KEY = "\x31\66\65\x35\x35";
    const DEFAULT_API_KEY = "\146\106\x64\x32\x58\143\166\x54\107\x44\145\155\x5a\166\142\x77\61\x62\x63\x55\x65\x73\x4e\112\127\x45\x71\113\142\142\x55\x71";
    const AREA_OF_INTEREST = "\127\x50\x20\x49\104\x50\40\x50\x4c\125\x47\111\116";
    const UPGRADE_USERS_PLAN = "\167\x70\137\x73\141\x6d\154\x5f\151\x64\160\137\165\160\147\162\x61\144\x65\137\160\154\141\x6e";
    const PATTERN_PHONE = "\x2f\136\x5b\x5c\x2b\x5d\134\x64\173\61\x2c\x34\175\x5c\144\173\x37\x2c\61\62\x7d\x24\174\136\133\x5c\53\x5d\x5c\x64\x7b\x31\x2c\64\x7d\x5b\134\x73\x5d\x5c\144\173\x37\x2c\x31\62\175\x24\57";
    const FEEDBACK_EMAIL = "\x73\141\155\x6c\x73\x75\160\160\157\x72\164\100\x78\145\143\165\x72\151\x66\171\x2e\x63\157\155";
    const WS_FED = "\127\123\x46\x45\x44";
    const SAML = "\123\101\115\x4c";
    const JWT = "\x4a\x57\x54";
    const AUTHN_REQUEST = "\x41\x75\164\x68\x6e\122\x65\161\165\145\163\164";
    const LOGOUT_REQUEST = "\114\x6f\147\x6f\x75\x74\122\145\x71\165\x65\163\x74";
    const SAML_RESPONSE = "\123\x61\155\x6c\x52\145\x73\160\157\x6e\163\145";
    const LOGOUT_RESPONSE = "\114\x6f\147\x6f\165\164\x52\x65\x73\x70\157\156\x73\145";
    const WS_FED_RESPONSE = "\127\x73\106\145\144\122\x65\x73\160\x6f\156\x73\x65";
    const JWT_RESPONSE = "\112\167\164\x52\x65\163\160\157\156\x73\x65";
    const FAQ_URL = "\150\x74\x74\160\x73\72\57\x2f\x66\141\x71\x2e\155\151\x6e\151\157\162\x61\x6e\x67\145\56\143\x6f\x6d\57\153\142\57\x73\x61\155\x6c\55\x73\x69\x6e\x67\154\145\x2d\163\151\147\x6e\x2d\157\156\57";
    const XML_SECURITY_KEY = MSI_DIR . "\x68\145\154\x70\x65\x72\57\x63\157\x6d\x6d\x6f\156\x2f\x58\x4d\114\123\x65\x63\x75\x72\x69\164\x79\113\145\171\56\x70\150\160";
    const XML_SEC_ENC = MSI_DIR . "\150\145\x6c\160\x65\x72\x2f\x63\x6f\155\155\x6f\156\57\130\115\114\123\145\143\x45\156\143\x2e\160\x68\x70";
    const XML_SECURITY_DSIG = MSI_DIR . "\x68\145\x6c\160\x65\x72\57\143\157\155\x6d\157\x6e\57\130\x4d\114\123\x65\x63\165\162\x69\164\x79\x44\123\x69\x67\56\x70\150\160";
    const XPATH = MSI_DIR . "\x68\x65\154\160\145\x72\x2f\143\157\x6d\x6d\x6f\156\x2f\x55\x74\x69\x6c\x73\x2f\130\x50\x61\x74\x68\56\x70\150\160";
    const AES_ENCRYPTION = MSI_DIR . "\x68\x65\154\x70\x65\162\x2f\x63\157\x6d\155\x6f\156\x2f\x41\105\x53\x45\x6e\x63\x72\171\x70\x74\x69\157\x6e\x2e\x70\150\x70";
    const SSO_MAIN_CONTROLLER = MSI_DIR . "\143\157\156\164\x72\x6f\154\x6c\145\x72\163\57\163\163\157\55\x6d\141\x69\156\x2d\143\x6f\x6e\x74\x72\x6f\154\154\x65\162\x2e\160\150\160";
    const FEEDBACK = MSI_DIR . "\x63\157\x6e\x74\x72\157\154\154\x65\x72\x73\x2f\146\145\145\144\142\141\x63\x6b\56\160\150\160";
    const SSO_IDP_NAVBAR = MSI_DIR . "\x63\157\x6e\164\162\x6f\x6c\154\145\x72\x73\57\163\163\157\55\x69\144\160\55\x6e\141\166\142\x61\162\x2e\x70\x68\160";
    const SSO_IDP_DATA = MSI_DIR . "\x63\x6f\156\x74\162\157\154\x6c\x65\162\x73\x2f\x73\163\157\55\151\x64\x70\x2d\x64\141\164\141\x2e\160\150\160";
    const SSO_SIGNIN_SETTINGS = MSI_DIR . "\143\x6f\x6e\164\x72\x6f\154\154\x65\162\x73\x2f\x73\x73\157\55\163\151\147\156\151\x6e\x2d\163\145\x74\x74\x69\156\147\163\56\160\x68\x70";
    const SSO_ATTR_SETTINGS = MSI_DIR . "\x63\157\156\164\x72\x6f\x6c\x6c\x65\x72\163\x2f\x73\x73\x6f\x2d\141\164\x74\162\55\x73\x65\164\164\x69\156\147\163\x2e\160\x68\x70";
    const SSO_PRICING = MSI_DIR . "\143\x6f\156\164\x72\157\x6c\x6c\145\162\x73\x2f\163\163\x6f\55\x70\x72\x69\143\151\156\x67\56\x70\x68\x70";
    const SSO_IDP_SUPPORT = MSI_DIR . "\x63\x6f\156\x74\x72\157\154\154\145\162\x73\57\163\163\157\x2d\151\x64\x70\55\x73\x75\160\160\157\x72\x74\x2e\160\x68\x70";
    const PLUGIN_DETAILS = MSI_DIR . "\x63\157\156\x74\162\157\x6c\x6c\145\162\163\x2f\160\x6c\165\x67\151\156\55\x64\145\164\141\151\154\x73\56\x70\x68\x70";
    const CONTACT_BUTTON = MSI_DIR . "\x63\157\156\x74\x72\x6f\x6c\154\x65\162\163\57\143\157\x6e\x74\x61\143\164\x2d\142\x75\164\x74\x6f\x6e\x2e\x70\x68\160";
    const SSO_IDP_SETTINGS = MSI_DIR . "\143\157\x6e\x74\162\157\154\x6c\x65\x72\163\x2f\163\x73\x6f\x2d\151\144\160\55\x73\x65\x74\164\x69\156\147\163\x2e\160\x68\x70";
    const VIEWS_CONTACT_BUTTON = MSI_DIR . "\x76\151\145\x77\x73\x2f\143\x6f\156\x74\x61\x63\164\55\x62\165\x74\x74\157\x6e\56\x70\150\160";
    const VIEWS_FEEDBACK = MSI_DIR . "\x76\151\x65\x77\163\57\x66\x65\145\144\142\141\143\153\x2e\160\150\x70";
    const VIEWS_PLUGIN_DETAILS = MSI_DIR . "\166\x69\145\x77\x73\57\160\x6c\165\x67\151\156\55\x64\145\164\141\151\x6c\163\x2e\x70\x68\160";
    const VIEWS_FAQ = MSI_DIR . "\x76\x69\x65\167\163\57\x66\141\161\56\160\150\x70";
    const VIEWS_IDP_DATA = MSI_DIR . "\166\151\x65\167\x73\57\151\144\160\55\144\141\x74\141\56\x70\150\x70";
    const VIEWS_NAVBAR = MSI_DIR . "\166\151\145\x77\163\57\x6e\x61\166\x62\141\162\56\x70\150\160";
    const VIEWS_USER_PROFILE = MSI_DIR . "\166\151\x65\167\x73\x2f\x75\163\145\162\x2d\x70\162\157\x66\151\x6c\145\x2e\x70\x68\160";
    const VIEWS_VERIFY_CUSTOMER = MSI_DIR . "\166\x69\x65\x77\163\57\x72\x65\x67\x69\163\164\x72\x61\164\x69\157\156\x2f\x76\145\162\151\146\171\x2d\x63\x75\163\x74\157\155\145\162\x2e\160\150\x70";
    const VIEWS_VERIFY_OTP = MSI_DIR . "\x76\151\x65\167\163\57\x72\x65\x67\x69\x73\x74\162\x61\x74\x69\157\x6e\x2f\166\145\x72\151\x66\x79\55\x6f\164\x70\56\x70\x68\x70";
    const VIEWS_NEW_REGISTRATION = MSI_DIR . "\x76\x69\145\167\163\57\x72\x65\x67\151\163\x74\x72\141\164\x69\157\156\57\x6e\145\167\55\x72\x65\x67\151\163\x74\162\141\x74\151\157\156\x2e\160\150\x70";
    const VIEWS_VERIFY_LK = MSI_DIR . "\x76\x69\145\167\x73\x2f\x72\145\147\x69\163\164\x72\x61\x74\x69\157\156\x2f\166\x65\x72\x69\x66\171\x2d\x6c\x6b\56\x70\x68\x70";
    const VIEWS_IDP_JWT_SETTINGS = MSI_DIR . "\x76\151\145\x77\163\x2f\x69\144\x70\55\152\167\164\x2d\x73\x65\164\x74\151\156\x67\163\56\x70\x68\160";
    const VIEWS_IDP_WSFED_SETTINGS = MSI_DIR . "\x76\151\145\167\x73\57\x69\144\x70\55\167\163\146\145\144\x2d\x73\145\164\164\x69\156\147\x73\x2e\x70\150\x70";
    const VIEWS_IDP_SETTINGS = MSI_DIR . "\166\151\145\x77\x73\x2f\151\144\160\x2d\163\145\x74\x74\151\x6e\x67\163\56\160\x68\x70";
    const VIEWS_IDP_DELETE = MSI_DIR . "\x76\151\145\167\x73\57\x69\144\x70\55\144\145\154\x65\164\145\56\x70\150\160";
    const VIEWS_IDP_ERROR = MSI_DIR . "\x76\151\145\167\163\x2f\x69\x64\160\55\145\x72\x72\x6f\162\56\160\150\160";
    const VIEWS_IDP_LIST = MSI_DIR . "\x76\x69\145\x77\x73\x2f\151\144\160\x2d\154\x69\x73\164\x2e\x70\x68\160";
    const VIEWS_ATTR_SETTINGS = MSI_DIR . "\x76\151\145\167\163\57\x61\x74\164\162\x2d\163\x65\164\164\x69\x6e\x67\x73\x2e\160\150\x70";
    const VIEWS_IDP_SUPPORT = MSI_DIR . "\166\151\145\167\x73\x2f\x69\144\160\x2d\163\165\x70\160\x6f\x72\164\56\x70\150\x70";
    const VIEWS_COMMON_ELEMENTS = MSI_DIR . "\166\151\x65\x77\x73\57\x63\157\x6d\x6d\x6f\x6e\55\145\154\x65\x6d\145\156\x74\x73\56\x70\150\x70";
    const VIEWS_PRICING = MSI_DIR . "\166\x69\x65\167\x73\57\x70\x72\x69\143\151\x6e\x67\56\x70\x68\160";
    const VIEWS_SIGNIN_SETTINGS = MSI_DIR . "\166\x69\x65\x77\163\57\163\x69\x67\x6e\151\156\55\x73\x65\x74\164\151\x6e\x67\x73\56\x70\x68\160";
    const WP_ADMIN_PLUGIN = ABSPATH . "\167\x70\x2d\x61\144\x6d\151\x6e\x2f\151\x6e\143\x6c\165\x64\145\163\57\x70\x6c\165\x67\x69\156\x2e\160\x68\160";
}
