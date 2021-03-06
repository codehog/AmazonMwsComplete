<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsFeedAndReportClient;

class MwsFeedAndReportClientPack extends MwsFeedAndReportClient {
    // Product And Inventory feeds
    const FEED_TYPE_PAI_IMAGES                          = '_POST_PRODUCT_IMAGE_DATA_';
    const FEED_TYPE_PAI_INVENTORY                       = '_POST_INVENTORY_AVAILABILITY_DATA_';
    const FEED_TYPE_PAI_OVERRIDES                       = '_POST_PRODUCT_OVERRIDES_DATA_';
    const FEED_TYPE_PAI_PRICING                         = '_POST_PRODUCT_PRICING_DATA_';
    const FEED_TYPE_PAI_PRODUCT                         = '_POST_PRODUCT_DATA_';
    const FEED_TYPE_PAI_RELATIONSHIPS                   = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    const FEED_TYPE_PAI_FLAT_BOOK_LOADER                = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_MUSIC_LOADER               = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_INVENTORY_LOADER           = '_POST_FLAT_FILE_INVLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_LISTINGS                   = '_POST_FLAT_FILE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_PRICE_AND_QUANTITY         = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    const FEED_TYPE_PAI_ACES_AUTOMOTIVE                 = '_POST_STD_ACES_DATA_';
    const FEED_TYPE_PAI_UIEE_BOOKS                      = '_POST_UIEE_BOOKLOADER_DATA_';

    const FEED_TYPE_ORDER_ACKNOWLEDGEMENT               = '_POST_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_ADJUSTMENT                    = '_POST_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FULFILLMENT                   = '_POST_ORDER_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_INVOICE_CONFIRM_CHINA         = '_POST_INVOICE_CONFIRMATION_DATA_';
    const FEED_TYPE_ORDER_FLAT_ACKNOWLEDGEMENT          = '_POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_ADJUSTMENT               = '_POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_FULFILLMENT              = '_POST_FLAT_FILE_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_INVOICE_CONFIRM_CHINA    = '_POST_FLAT_FILE_INVOICE_CONFIRMATION_DATA_';

    const FEED_TYPE_FBA_FULFILLMENT_ORDER               = '_POST_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FULFILLMENT_CANCEL              = '_POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_INBOUND_CARTON                  = '_POST_FBA_INBOUND_CARTON_CONTENTS_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_ORDER          = '_POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_CANCEL         = '_POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_REMOVAL_CREATE             = '_POST_FLAT_FILE_FBA_CREATE_REMOVAL_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_CREATE        = '_POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_UPDATE        = '_POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN_';

    // Report type enumeration, see http://docs.developer.amazonservices.com/en_UK/reports/Reports_ReportType.html
    // An effort has been made to group these by category (prefix) and make the constant names meaningful
    // Listing Reports
    const REPORT_LISTING_INVENTORY                      = '_GET_FLAT_FILE_OPEN_LISTINGS_DATA_';
    const REPORT_LISTING_ACTIVE_LISTINGS                = '_GET_MERCHANT_LISTINGS_DATA_';
    const REPORT_LISTING_OPEN_LISTINGS                  = '_GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT_';
    const REPORT_LISTING_OPEN_LISTINGS_LITE             = '_GET_MERCHANT_LISTINGS_DATA_LITE_';
    const REPORT_LISTING_OPEN_LISTINGS_LITER            = '_GET_MERCHANT_LISTINGS_DATA_LITER_';
    const REPORT_LISTING_CANCELED_LISTINGS              = '_GET_MERCHANT_CANCELLED_LISTINGS_DATA_';
    const REPORT_LISTING_SOLD_LISTINGS                  = '_GET_CONVERGED_FLAT_FILE_SOLD_LISTINGS_DATA_';
    const REPORT_LISTING_QUALITY_AND_SUPPRESSED         = '_GET_MERCHANT_LISTINGS_DEFECT_DATA_';
    // Order Reports
    const REPORT_ORDERS_UNSHIPPED                       = '_GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_';
    const REPORT_ORDERS_SCHEDULED_XML                   = '_GET_ORDERS_DATA_';
    const REPORT_ORDERS_FLAT_FILE                       = '_GET_FLAT_FILE_ORDERS_DATA_';
    const REPORT_ORDERS_CONVERGED_FLAT_FILE             = '_GET_CONVERGED_FLAT_FILE_ORDER_REPORT_DATA_';
    // Order Tracking Reports
    const REPORT_TRACKING_BY_LAST_UPDATE_FLAT_FILE      = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_TRACKING_BY_ORDER_DATE_FLAT_FILE       = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_TRACKING_BY_LAST_UPDATE_XML            = '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_TRACKING_BY_ORDER_DATE_XML             = '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    // Pending Order Reports
    const REPORT_PENDING_ORDERS_FLAT_FILE               = '_GET_FLAT_FILE_PENDING_ORDERS_DATA_';
    const REPORT_PENDING_ORDERS_XML                     = '_GET_PENDING_ORDERS_DATA_';
    const REPORT_PENDING_ORDERS_CONVERGED_FLAT_FILE     = '_GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA_';
    // Performance Reports
    const REPORT_PERFORMANCE_FEEDBACK_FLAT_FILE         = '_GET_SELLER_FEEDBACK_DATA_';
    const REPORT_PERFORMANCE_CUSTOMER_METRICS_XML       = '_GET_V1_SELLER_PERFORMANCE_REPORT_';
    // Settlement Reports
    const REPORT_SETTLEMENT_FLAT_FILE                   = '_GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_';
    const REPORT_SETTLEMENT_XML                         = '_GET_V2_SETTLEMENT_REPORT_DATA_XML_';
    const REPORT_SETTLEMENT_FLAT_FILE_V2                = '_GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2_';
    // Sales Tax Reports
    const REPORT_SALES_TAX                              = '_GET_FLAT_FILE_SALES_TAX_DATA_';
    // Browse Tree Reports
    const REPORT_BROWSE_TREE                            = '_GET_XML_BROWSE_TREE_DATA_';
    // Fulfillment By Amazon (FBA) Reports
    // FBA Sales Reports
    const REPORT_FBA_SALES_AMAZON_FULFILLED_SHIPMENTS   = '_GET_AMAZON_FULFILLED_SHIPMENTS_DATA_';
    const REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_FLAT_FILE = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_FBA_SALES_ALL_BY_ORDER_DATE_FLAT_FILE  = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_XML       = '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_FBA_SALES_ALL_BY_ORDER_DATE_XML        = '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_FBA_SALES_CUSTOMER_SHIPMENT            = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA_';
    const REPORT_FBA_SALES_PROMOTIONS                   = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA_';
    const REPORT_FBA_SALES_CUSTOMER_TAXES               = '_GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA_';
    // FBA Inventory Reports
    const REPORT_FBA_INVENTORY_AFN                      = '_GET_AFN_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_AFN_BY_COUNTRY           = '_GET_AFN_INVENTORY_DATA_BY_COUNTRY_';
    const REPORT_FBA_INVENTORY_HISTORY_DAILY            = '_GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_HISTORY_MONTHLY          = '_GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_RECEIVED                 = '_GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA_';
    const REPORT_FBA_INVENTORY_RESERVED                 = '_GET_RESERVED_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_EVENT_DETAIL             = '_GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA_';
    const REPORT_FBA_INVENTORY_ADJUSTMENTS              = '_GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA_';
    const REPORT_FBA_INVENTORY_HEALTH                   = '_GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA_';
    const REPORT_FBA_INVENTORY_MANAGE_ACTIVE            = '_GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_MANAGE_ALL               = '_GET_FBA_MYI_ALL_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_CROSS_BORDER_MOVEMENT    = '_GET_FBA_FULFILLMENT_CROSS_BORDER_INVENTORY_MOVEMENT_DATA_';
    const REPORT_FBA_INVENTORY_INBOUND_PERFORMANCE      = '_GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA_';
    const REPORT_FBA_INVENTORY_STRANDED                 = '_GET_STRANDED_INVENTORY_UI_DATA_';
    const REPORT_FBA_INVENTORY_BULK_FIX_STRANDED        = '_GET_STRANDED_INVENTORY_LOADER_DATA_';
    const REPORT_FBA_INVENTORY_AGE                      = '_GET_FBA_INVENTORY_AGED_DATA_';
    const REPORT_FBA_INVENTORY_EXCESS                   = '_GET_EXCESS_INVENTORY_DATA_';
    // FBA Payments Reports
    const REPORT_FBA_PAYMENTS_FEE_PREVIEW               = '_GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA_';
    const REPORT_FBA_PAYMENTS_REIMBURSEMENTS            = '_GET_FBA_REIMBURSEMENTS_DATA_';
    // FBA Customer Concessions Reports
    const REPORT_FBA_CONCESSION_RETURNS                 = '_GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA_';
    const REPORT_FBA_CONCESSION_REPLACEMENTS            = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA_';
    // FBA Removals Reports
    const REPORT_FBA_REMOVAL_RECOMMENDED                = '_GET_FBA_RECOMMENDED_REMOVAL_DATA_';
    const REPORT_FBA_REMOVAL_ORDER_DETAIL               = '_GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA_';
    const REPORT_FBA_REMOVAL_SHIPMENT_DETAIL            = '_GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA_';

    const PARAM_FEED_CONTENT                            = 'FeedContent';
    const PARAM_FEED_CONTENT_MD5                        = 'ContentMd5';
    const PARAM_END_DATE                                = 'EndDate';
    const PARAM_FEED_PROCESSING_STATUS_LIST             = 'FeedProcessingStatusList';
    const PARAM_FEED_SUBMISSION_ID                      = 'FeedSubmissionId';
    const PARAM_FEED_SUBMISSION_ID_LIST                 = 'FeedSubmissionIdList';
    const PARAM_FEED_TYPE                               = 'FeedType';
    const PARAM_FEED_TYPE_LIST                          = 'FeedTypeList';
    const PARAM_MARKETPLACE                             = 'Marketplace';
    const PARAM_MARKETPLACE_ID_LIST                     = 'MarketplaceIdList';
    const PARAM_MAX_COUNT                               = 'MaxCount';
    const PARAM_MERCHANT                                = 'Merchant';
    const PARAM_NEXT_TOKEN                              = 'NextToken';
    const PARAM_PURGE_AND_REPLACE                       = 'PurgeAndReplace';
    const PARAM_REPORT                                  = 'Report';
    const PARAM_REPORT_OPTIONS                          = 'ReportOptions';
    const PARAM_REPORT_PROCESSING_STATUS_LIST           = 'ReportProcessingStatusList';
    const PARAM_REPORT_REQUEST_ID_LIST                  = 'ReportRequestIdList';
    const PARAM_REPORT_ID                               = 'ReportId';
    const PARAM_REPORT_TYPE                             = 'ReportType';
    const PARAM_REPORT_TYPE_LIST                        = 'ReportTypeList';
    const PARAM_REQUESTED_FROM_DATE                     = 'RequestedFromDate';
    const PARAM_REQUESTED_TO_DATE                       = 'RequestedToDate';
    const PARAM_START_DATE                              = 'StartDate';
    const PARAM_SUBMITTED_DATE_FROM                     = 'SubmittedFromDate';
    const PARAM_SUBMITTED_DATE_TO                       = 'SubmittedToDate';

    const PROCESSING_STATUS_SUBMITTED                   = '_SUBMITTED_'; 	                // The request has been received, but has not yet started processing.
    const PROCESSING_STATUS_UNCONFIRMED                 = '_UNCONFIRMED_'; 	                // The request is pending.
    const PROCESSING_STATUS_IN_PROGRESS                 = '_IN_PROGRESS_'; 	                // The request is being processed.
    const PROCESSING_STATUS_IN_SAFETY_NET               = '_IN_SAFETY_NET_';                // The request is being processed, but the system has determined that there is a potential error with the feed (for example, the request will remove all inventory from a seller's account.) An Amazon seller support associate will contact the seller to confirm whether the feed should be processed.
    const PROCESSING_STATUS_AWAIT_ASYNCH_REPLY          = '_AWAITING_ASYNCHRONOUS_REPLY_';  // The request is being processed, but is waiting for external information before it can complete.
    const PROCESSING_STATUS_CANCELLED                   = '_CANCELLED_'; 	                // The request has been aborted due to a fatal error.
    const PROCESSING_STATUS_DONE_NO_DATA                = '_DONE_NO_DATA_'; 	            // (Reports only) The request has been processed.
    const PROCESSING_STATUS_DONE                        = '_DONE_'; 	                    // The request has been processed.
    // Once you have PROCESSING_STATUS_DONE:
    // For feeds you can now call the GetFeedSubmissionResult operation to receive a processing report that describes which records in the feed were successful and which records generated errors.
    // For reports you can now call GetReport to retrieve the actual report data.

    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;

    public function __construct(MwsClientPoolConfig $poolConfig) {
        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getConfigForFeedAndReport($this->getServiceUrlSuffix()),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion()
        );
    }

    private function getServiceUrlSuffix() {
        return '/';
    }


    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callCancelFeedSubmissions($submissionIds = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];

        if (!empty($submissionIds)) {
            $requestArray[self::PARAM_FEED_SUBMISSION_ID_LIST] = [ 'Id' => $submissionIds];
        } else {
            if (!empty($feedTypes)) {
                $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
            }
            if (!empty($dateFrom)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
            }
            if (!empty($dateTo)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
            }
        }
        return $this->cancelFeedSubmissions($requestArray);
    }
    public function callGetFeedSubmissionCount($statusCodes = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];
        if (!empty($statusCodes)) {
            $requestArray[self::PARAM_FEED_PROCESSING_STATUS_LIST] = [ 'Status' => $statusCodes ];
        }
        if (!empty($feedTypes)) {
            $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
        }
        if (!empty($dateFrom)) {
            $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
        }
        if (!empty($dateTo)) {
            $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
        }
        return $this->getFeedSubmissionCount($requestArray);
    }
    public function callGetFeedSubmissionList($submissionIds = null, $maxCount = null, $statusCodes = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];
        if (!empty($submissionIds)) {
            $requestArray[self::PARAM_FEED_SUBMISSION_ID_LIST] = [ 'Id' => $submissionIds];
        } else {
            if (!empty($maxCount)) {
                $requestArray[self::PARAM_MAX_COUNT] = $maxCount;
            }
            if (!empty($statusCodes)) {
                $requestArray[self::PARAM_FEED_PROCESSING_STATUS_LIST] = [ 'Status' => $statusCodes ];
            }
            if (!empty($feedTypes)) {
                $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
            }
            if (!empty($dateFrom)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
            }
            if (!empty($dateTo)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
            }
        }
        return $this->getFeedSubmissionList($requestArray);
    }
    public function callGetFeedSubmissionListByNextToken($nextToken) {
        return $this->getFeedSubmissionListByNextToken([
            self::PARAM_NEXT_TOKEN          => $nextToken,
            self::PARAM_MERCHANT            => $this->sellerId,
        ]);
    }
    public function callGetFeedSubmissionResult($feedSubmissionId) {
        return $this->getFeedSubmissionResult([
            self::PARAM_FEED_SUBMISSION_ID  => $feedSubmissionId,
            self::PARAM_MERCHANT            => $this->sellerId,
        ]);
    }

    /**
     * @param string $feedType              One of the FEED_TYPE_XYZ values
     * @param resource $feedContent         A file handle (resource) pointing to the feed content
     * @return \MarketplaceWebService_Model_SubmitFeedResponse
     */
    public function callSubmitFeed($feedType, $feedContent) {
        $contentHash = base64_encode(md5(stream_get_contents($feedContent), true));
        rewind($feedContent);

        $parameters = [
            self::PARAM_FEED_CONTENT        => $feedContent,
            self::PARAM_FEED_CONTENT_MD5    => $contentHash,
            self::PARAM_FEED_TYPE           => $feedType,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
            self::PARAM_MERCHANT            => $this->sellerId,
            // self::PARAM_PURGE_AND_REPLACE   => $purge, // This is ignored for safety (uses the MWS API default of false)
        ];
        return $this->submitFeed($parameters);
    }

    /**
     * @param string $reportType            A valid ReportType @todo - add class constants for various report types
     * @todo - add startDate, endDate, reportOptions
     * @return \MarketplaceWebService_Model_RequestReportResponse
     */
    public function callRequestReport($reportType) {
        return $this->requestReport([
            self::PARAM_MARKETPLACE         => $this->marketplaceId,
            self::PARAM_MERCHANT            => $this->sellerId,
            self::PARAM_REPORT_TYPE         => $reportType,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
        ]);
    }

    /**
     * @param string|array $reportRequestIds    One or more ReportRequestIds, as returned by requestReport()
     * @todo - add ReportTypeList, ReportProcessingStatusList, MaxCount, RequestedFromDate, RequestedFromDate
     * @return \MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public function callGetReportRequestList($reportRequestIds) {
        return $this->getReportRequestList([
            self::PARAM_MARKETPLACE             => $this->marketplaceId,
            self::PARAM_MERCHANT                => $this->sellerId,
            self::PARAM_REPORT_REQUEST_ID_LIST  => array('Id' => $reportRequestIds),
        ]);
    }

    /**
     * @param string $reportId              The GeneratedReportId to download, as returned by getReportRequestList()
     * @param resource $filename            A file handle (resource) where the report will be written to
     * @return \MarketplaceWebService_Model_GetReportResponse
     */
    public function callGetReport($reportId, $filename) {
        return $this->getReport([
            self::PARAM_MERCHANT                => $this->sellerId,
            self::PARAM_REPORT_ID               => $reportId,
            self::PARAM_REPORT                  => $filename,
        ]);
    }
}
