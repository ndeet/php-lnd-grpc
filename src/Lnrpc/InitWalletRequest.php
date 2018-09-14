<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.InitWalletRequest</code>
 */
class InitWalletRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *wallet_password is the passphrase that should be used to encrypt the
     *wallet. This MUST be at least 8 chars in length. After creation, this
     *password is required to unlock the daemon.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     */
    private $wallet_password = '';
    /**
     **
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This may have been generated by the
     *GenSeed method, or be an existing seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 2;</code>
     */
    private $cipher_seed_mnemonic;
    /**
     **
     *aezeed_passphrase is an optional user provided passphrase that will be used
     *to encrypt the generated aezeed cipher seed.
     *
     * Generated from protobuf field <code>bytes aezeed_passphrase = 3;</code>
     */
    private $aezeed_passphrase = '';
    /**
     **
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *invdividual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 4;</code>
     */
    private $recovery_window = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $wallet_password
     *          *
     *          wallet_password is the passphrase that should be used to encrypt the
     *          wallet. This MUST be at least 8 chars in length. After creation, this
     *          password is required to unlock the daemon.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $cipher_seed_mnemonic
     *          *
     *          cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *          cipher seed obtained by the user. This may have been generated by the
     *          GenSeed method, or be an existing seed.
     *     @type string $aezeed_passphrase
     *          *
     *          aezeed_passphrase is an optional user provided passphrase that will be used
     *          to encrypt the generated aezeed cipher seed.
     *     @type int $recovery_window
     *          *
     *          recovery_window is an optional argument specifying the address lookahead
     *          when restoring a wallet seed. The recovery window applies to each
     *          invdividual branch of the BIP44 derivation paths. Supplying a recovery
     *          window of zero indicates that no addresses should be recovered, such after
     *          the first initialization of the wallet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *wallet_password is the passphrase that should be used to encrypt the
     *wallet. This MUST be at least 8 chars in length. After creation, this
     *password is required to unlock the daemon.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     * @return string
     */
    public function getWalletPassword()
    {
        return $this->wallet_password;
    }

    /**
     **
     *wallet_password is the passphrase that should be used to encrypt the
     *wallet. This MUST be at least 8 chars in length. After creation, this
     *password is required to unlock the daemon.
     *
     * Generated from protobuf field <code>bytes wallet_password = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setWalletPassword($var)
    {
        GPBUtil::checkString($var, False);
        $this->wallet_password = $var;

        return $this;
    }

    /**
     **
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This may have been generated by the
     *GenSeed method, or be an existing seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCipherSeedMnemonic()
    {
        return $this->cipher_seed_mnemonic;
    }

    /**
     **
     *cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed
     *cipher seed obtained by the user. This may have been generated by the
     *GenSeed method, or be an existing seed.
     *
     * Generated from protobuf field <code>repeated string cipher_seed_mnemonic = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCipherSeedMnemonic($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cipher_seed_mnemonic = $arr;

        return $this;
    }

    /**
     **
     *aezeed_passphrase is an optional user provided passphrase that will be used
     *to encrypt the generated aezeed cipher seed.
     *
     * Generated from protobuf field <code>bytes aezeed_passphrase = 3;</code>
     * @return string
     */
    public function getAezeedPassphrase()
    {
        return $this->aezeed_passphrase;
    }

    /**
     **
     *aezeed_passphrase is an optional user provided passphrase that will be used
     *to encrypt the generated aezeed cipher seed.
     *
     * Generated from protobuf field <code>bytes aezeed_passphrase = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAezeedPassphrase($var)
    {
        GPBUtil::checkString($var, False);
        $this->aezeed_passphrase = $var;

        return $this;
    }

    /**
     **
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *invdividual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 4;</code>
     * @return int
     */
    public function getRecoveryWindow()
    {
        return $this->recovery_window;
    }

    /**
     **
     *recovery_window is an optional argument specifying the address lookahead
     *when restoring a wallet seed. The recovery window applies to each
     *invdividual branch of the BIP44 derivation paths. Supplying a recovery
     *window of zero indicates that no addresses should be recovered, such after
     *the first initialization of the wallet.
     *
     * Generated from protobuf field <code>int32 recovery_window = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRecoveryWindow($var)
    {
        GPBUtil::checkInt32($var);
        $this->recovery_window = $var;

        return $this;
    }

}

