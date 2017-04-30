<?php namespace VestaAPI\Services;

trait DNS
{

    /**
     * List DNS
     *
     * @return mixed
     */
    public function listDNS()
    {
        $this->returnCode = 'no';
        $listDns = $this->send('v-list-dns-domains', $this->vestaUserName, 'json');
        $data = json_decode($listDns, true);

        return $data;
    }

    /**
     * List Only DNS
     *
     * @param $dns
     *
     * @return mixed
     */
    public function listOnlyDNS($dns)
    {
        $this->returnCode = 'no';
        $listDNS = $this->send('v-list-dns-domain', $this->vestaUserName, $dns, 'json');
        $data = json_decode($listDNS, true);

        return $data;
    }

    /**
     * Delete DNS record domain
     *
     * @param $domain
     *
     * @return mixed
     */
    public function deleteDNDDomain($domain)
    {
        return $this->send('v-delete-dns-domain', $this->vestaUserName, $domain);
    }

    /**
     * Delete DNS record
     *
     * @param $domain
     * @param $recordId
     *
     * @return mixed
     */
    public function deleteDNSRecord($domain, $recordId)
    {
        return $this->send('v-delete-dns-record', $this->vestaUserName, $domain, $recordId);
    }

    /**
     * Add DNS domain
     *
     * @param      $domain
     * @param      $ip
     * @param      $ns1
     * @param      $ns2
     * @param null $ns3
     * @param null $ns4
     *
     * @return mixed
     */
    public function addDNSDomain($domain, $ip, $ns1, $ns2, $ns3 = null, $ns4 = null)
    {
        return $this->send('v-add-dns-domain', $this->vestaUserName, $domain, $ip, $ns1, $ns2, $ns3,
            $ns4, 'no');
    }

    /**
     * Set expiriation date
     *
     * @param $domain
     * @param $exp
     *
     * @return mixed
     */
    public function changeDNSDomainExp($domain, $exp)
    {
        return $this->send('v-change-dns-domain-exp', $this->vestaUserName, $domain, $exp, "no");
    }

    /**
     * Set TTL
     *
     * @param $domain
     * @param $ttl
     *
     * @return mixed
     */
    public function changeDNSDomainTtl($domain, $ttl)
    {
        return $this->send('v-change-dns-domain-ttl', $this->vestaUserName, $domain, $ttl, "no");
    }

    /**
     * List DNS record domain
     *
     * @param $domain
     *
     * @return mixed
     */
    public function listDNSRecords($domain)
    {
        $this->returnCode = 'no';
        $data = $this->send('v-list-dns-records', $this->vestaUserName, $domain, 'json');
        $data = json_decode($data, true);

        return $data;
    }

    /**
     * Change DNS domain record
     *
     * @param $domain
     * @param $recordId
     * @param $val
     * @param $priority
     *
     * @return mixed
     */
    public function changeDNSDomainRecord($domain, $recordId, $val, $priority)
    {
        return $this->send('v-change-dns-record', $this->vestaUserName, $domain, $recordId, $val,
            $priority);
    }

    /**
     * Remove DNS record
     *
     * @param $domain
     * @param $recordId
     */
    public function removeDNSRecord($domain, $recordId)
    {
        $this->send('v-delete-dns-record', $this->vestaUserName, $domain, $recordId);
    }

    /**
     * Add DNS record
     *
     * @param $domain
     * @param $rec
     * @param $type
     * @param $val
     * @param $priority
     */
    public function addDNSRecord($domain, $rec, $type, $val, $priority)
    {
        $this->send('v-add-dns-record', $this->vestaUserName, $domain, $rec, $type, $val, $priority);
    }

}
