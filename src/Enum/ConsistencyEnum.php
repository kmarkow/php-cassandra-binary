<?php
namespace evseevnn\Cassandra\Enum;

class ConsistencyEnum {
	const CONSISTENCY_ANY = 0x0000;
	const CONSISTENCY_ONE = 0x0001;
	const CONSISTENCY_TWO = 0x0002;
	const CONSISTENCY_THREE = 0x0003;
	const CONSISTENCY_QUORUM = 0x0004;
	const CONSISTENCY_ALL = 0x0005;
	const CONSISTENCY_LOCAL_QUORUM = 0x0006;
	const CONSISTENCY_EACH_QUORUM = 0x0007;
	const CONSISTENCY_LOCAL_ONE = 0x0010;
}