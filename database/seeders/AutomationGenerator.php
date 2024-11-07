<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class AutomationGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $dataAddress = [
        ['POSTAL_CODE' => 'PTC8088', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5160', 'SUB_DISTRICT' => 'VLG62850', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8091', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5160', 'SUB_DISTRICT' => 'VLG62851', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8092', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62852', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8092', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62853', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8093', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62854', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8093', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62855', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8093', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62856', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8092', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5161', 'SUB_DISTRICT' => 'VLG62857', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8094', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5162', 'SUB_DISTRICT' => 'VLG62858', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8095', 'CITY' => 'CTY0364', 'DISTRICT' => 'SBD5162', 'SUB_DISTRICT' => 'VLG62859', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8115', 'CITY' => 'CTY0365', 'DISTRICT' => 'SBD5171', 'SUB_DISTRICT' => 'VLG62913', 'PROVINCE' => 'PVN0023'],
        ['POSTAL_CODE' => 'PTC8121', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5177', 'SUB_DISTRICT' => 'VLG62949', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8125', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5177', 'SUB_DISTRICT' => 'VLG62950', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8125', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5177', 'SUB_DISTRICT' => 'VLG62951', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8125', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5177', 'SUB_DISTRICT' => 'VLG62952', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63003', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63004', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63005', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63006', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63007', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC8130', 'CITY' => 'CTY0366', 'DISTRICT' => 'SBD5183', 'SUB_DISTRICT' => 'VLG63008', 'PROVINCE' => 'PVN0024'],
        ['POSTAL_CODE' => 'PTC2837', 'CITY' => 'CTY0155', 'DISTRICT' => 'SBD1967', 'SUB_DISTRICT' => 'VLG25556', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2838', 'CITY' => 'CTY0155', 'DISTRICT' => 'SBD1967', 'SUB_DISTRICT' => 'VLG25557', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2838', 'CITY' => 'CTY0155', 'DISTRICT' => 'SBD1967', 'SUB_DISTRICT' => 'VLG25558', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2854', 'CITY' => 'CTY0156', 'DISTRICT' => 'SBD1971', 'SUB_DISTRICT' => 'VLG25579', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2855', 'CITY' => 'CTY0156', 'DISTRICT' => 'SBD1971', 'SUB_DISTRICT' => 'VLG25580', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2897', 'CITY' => 'CTY0157', 'DISTRICT' => 'SBD1980', 'SUB_DISTRICT' => 'VLG25624', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2898', 'CITY' => 'CTY0157', 'DISTRICT' => 'SBD1980', 'SUB_DISTRICT' => 'VLG25625', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2899', 'CITY' => 'CTY0157', 'DISTRICT' => 'SBD1980', 'SUB_DISTRICT' => 'VLG25626', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2962', 'CITY' => 'CTY0159', 'DISTRICT' => 'SBD1992', 'SUB_DISTRICT' => 'VLG25701', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2963', 'CITY' => 'CTY0159', 'DISTRICT' => 'SBD1992', 'SUB_DISTRICT' => 'VLG25702', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC2964', 'CITY' => 'CTY0159', 'DISTRICT' => 'SBD1992', 'SUB_DISTRICT' => 'VLG25703', 'PROVINCE' => 'PVN0011'],
        ['POSTAL_CODE' => 'PTC3156', 'CITY' => 'CTY0162', 'DISTRICT' => 'SBD2078', 'SUB_DISTRICT' => 'VLG26495', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3156', 'CITY' => 'CTY0162', 'DISTRICT' => 'SBD2078', 'SUB_DISTRICT' => 'VLG26496', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3156', 'CITY' => 'CTY0162', 'DISTRICT' => 'SBD2078', 'SUB_DISTRICT' => 'VLG26497', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3088', 'CITY' => 'CTY0161', 'DISTRICT' => 'SBD2013', 'SUB_DISTRICT' => 'VLG25846', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3088', 'CITY' => 'CTY0161', 'DISTRICT' => 'SBD2013', 'SUB_DISTRICT' => 'VLG25847', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3088', 'CITY' => 'CTY0161', 'DISTRICT' => 'SBD2013', 'SUB_DISTRICT' => 'VLG25848', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3341', 'CITY' => 'CTY0166', 'DISTRICT' => 'SBD2224', 'SUB_DISTRICT' => 'VLG27922', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3341', 'CITY' => 'CTY0166', 'DISTRICT' => 'SBD2224', 'SUB_DISTRICT' => 'VLG27923', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3341', 'CITY' => 'CTY0166', 'DISTRICT' => 'SBD2224', 'SUB_DISTRICT' => 'VLG27924', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3718', 'CITY' => 'CTY0177', 'DISTRICT' => 'SBD2524', 'SUB_DISTRICT' => 'VLG31024', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3718', 'CITY' => 'CTY0177', 'DISTRICT' => 'SBD2524', 'SUB_DISTRICT' => 'VLG31025', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3718', 'CITY' => 'CTY0177', 'DISTRICT' => 'SBD2524', 'SUB_DISTRICT' => 'VLG31026', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3712', 'CITY' => 'CTY0176', 'DISTRICT' => 'SBD2520', 'SUB_DISTRICT' => 'VLG30993', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3712', 'CITY' => 'CTY0176', 'DISTRICT' => 'SBD2520', 'SUB_DISTRICT' => 'VLG30994', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC3712', 'CITY' => 'CTY0176', 'DISTRICT' => 'SBD2520', 'SUB_DISTRICT' => 'VLG30995', 'PROVINCE' => 'PVN0012'],
        ['POSTAL_CODE' => 'PTC4411', 'CITY' => 'CTY0198', 'DISTRICT' => 'SBD2862', 'SUB_DISTRICT' => 'VLG35308', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4411', 'CITY' => 'CTY0198', 'DISTRICT' => 'SBD2862', 'SUB_DISTRICT' => 'VLG35309', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4411', 'CITY' => 'CTY0198', 'DISTRICT' => 'SBD2862', 'SUB_DISTRICT' => 'VLG35310', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4302', 'CITY' => 'CTY0195', 'DISTRICT' => 'SBD2788', 'SUB_DISTRICT' => 'VLG34191', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4302', 'CITY' => 'CTY0195', 'DISTRICT' => 'SBD2788', 'SUB_DISTRICT' => 'VLG34192', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4302', 'CITY' => 'CTY0195', 'DISTRICT' => 'SBD2788', 'SUB_DISTRICT' => 'VLG34193', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4104', 'CITY' => 'CTY0188', 'DISTRICT' => 'SBD2661', 'SUB_DISTRICT' => 'VLG32062', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4104', 'CITY' => 'CTY0188', 'DISTRICT' => 'SBD2661', 'SUB_DISTRICT' => 'VLG32063', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4105', 'CITY' => 'CTY0189', 'DISTRICT' => 'SBD2662', 'SUB_DISTRICT' => 'VLG32064', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC4105', 'CITY' => 'CTY0189', 'DISTRICT' => 'SBD2662', 'SUB_DISTRICT' => 'VLG32065', 'PROVINCE' => 'PVN0013'],
        ['POSTAL_CODE' => 'PTC6319', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3941', 'SUB_DISTRICT' => 'VLG49193', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6319', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3941', 'SUB_DISTRICT' => 'VLG49194', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6320', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3941', 'SUB_DISTRICT' => 'VLG49195', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6321', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3942', 'SUB_DISTRICT' => 'VLG49196', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6322', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3942', 'SUB_DISTRICT' => 'VLG49197', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6323', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3942', 'SUB_DISTRICT' => 'VLG49198', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6324', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3942', 'SUB_DISTRICT' => 'VLG49199', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6325', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3943', 'SUB_DISTRICT' => 'VLG49200', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6326', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3943', 'SUB_DISTRICT' => 'VLG49201', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6327', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3943', 'SUB_DISTRICT' => 'VLG49202', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6234', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3943', 'SUB_DISTRICT' => 'VLG49203', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6328', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3944', 'SUB_DISTRICT' => 'VLG49204', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6328', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3944', 'SUB_DISTRICT' => 'VLG49205', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6329', 'CITY' => 'CTY0264', 'DISTRICT' => 'SBD3944', 'SUB_DISTRICT' => 'VLG49206', 'PROVINCE' => 'PVN0015'],
        ['POSTAL_CODE' => 'PTC6737', 'CITY' => 'CTY0281', 'DISTRICT' => 'SBD4163', 'SUB_DISTRICT' => 'VLG51465', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6737', 'CITY' => 'CTY0281', 'DISTRICT' => 'SBD4163', 'SUB_DISTRICT' => 'VLG51466', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6737', 'CITY' => 'CTY0281', 'DISTRICT' => 'SBD4163', 'SUB_DISTRICT' => 'VLG51467', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6757', 'CITY' => 'CTY0282', 'DISTRICT' => 'SBD4168', 'SUB_DISTRICT' => 'VLG51522', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6758', 'CITY' => 'CTY0282', 'DISTRICT' => 'SBD4168', 'SUB_DISTRICT' => 'VLG51523', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6758', 'CITY' => 'CTY0282', 'DISTRICT' => 'SBD4168', 'SUB_DISTRICT' => 'VLG51524', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6664', 'CITY' => 'CTY0274', 'DISTRICT' => 'SBD4114', 'SUB_DISTRICT' => 'VLG50840', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6664', 'CITY' => 'CTY0274', 'DISTRICT' => 'SBD4114', 'SUB_DISTRICT' => 'VLG50841', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6670', 'CITY' => 'CTY0275', 'DISTRICT' => 'SBD4119', 'SUB_DISTRICT' => 'VLG50890', 'PROVINCE' => 'PVN0017'],
        ['POSTAL_CODE' => 'PTC6670', 'CITY' => 'CTY0275', 'DISTRICT' => 'SBD4119', 'SUB_DISTRICT' => 'VLG50891', 'PROVINCE' => 'PVN0017'],
    ];

    private $dataJenisAgunan = [
        ['JENIS_AGUNAN' => 82, 'NAME' => 'Tgihan Termijn (Proyek Pem) UC', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 83, 'NAME' => 'Tghan Termijn Proyek Swasta UC', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 48, 'NAME' => 'Termin yg akan ada -Proyek Pem', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 49, 'NAME' => 'Termin yg akan ada - P.Swasta', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 7, 'NAME' => 'Tgihan Termijn (Proyek Pem) CT', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 8, 'NAME' => 'Tghan Termijn Proyek Swasta CT', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 51, 'NAME' => 'Tagihan Piutang Dagang - Daftar Piutang', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 35, 'NAME' => 'Tanah/Bangunan diikat PPJPK & SKMHT incl.tnh adat', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 22, 'NAME' => 'Tanah Tambak Udang SHM', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 23, 'NAME' => 'Tanah Tambak Udang SHGU', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 24, 'NAME' => 'Tanah Tambak Udang SHP', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 9, 'NAME' => 'Tanah SHM;SHGB;SHGU;SHP', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 21, 'NAME' => 'Tanah Perkebunan', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 36, 'NAME' => 'TnhSHGB jt tempo & dlm perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 37, 'NAME' => 'TnhSHGU jt tempo & dlm perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 38, 'NAME' => 'Tnh SHP jt tempo & dlm perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 70, 'NAME' => 'RumahTinggal', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 43, 'NAME' => 'Tanah dan Bangunan dengan bukti SKGR', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 28, 'NAME' => 'Tanah & Bangunan di P.Batam', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 39, 'NAME' => 'Bgn tnp IMB diatas tanah SHM', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 40, 'NAME' => 'Bgn tnp IMB diatas tanah SHGB', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 41, 'NAME' => 'Bgn tnp IMB diatas tanah SHGU', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 42, 'NAME' => 'Bgn tnp IMB diatas tanah SHP', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 42, 'NAME' => 'Bgn tnp IMB diatas tanah SHP', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 10, 'NAME' => 'Bangunan IMB diatas tanah yang dijaminkan', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 44, 'NAME' => 'BgnIMB diatas tnh SHGB perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 45, 'NAME' => 'BgnIMB diatas tnh SHGU perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 46, 'NAME' => 'Bgn IMB diatas tnh SHP perpanj', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 72, 'NAME' => 'Apartemen/Rumah', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 12, 'NAME' => 'Apartemen/rusun/rukan', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 84, 'NAME' => 'Ruko', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 71, 'NAME' => 'RumahToko/RumahKantor', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 66, 'NAME' => 'Gedung / Ruang kantor', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 67, 'NAME' => 'Gudang', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 68, 'NAME' => 'Hotel', 'JENIS_BENTUK_AGUNAN' => 1],
        ['JENIS_AGUNAN' => 5, 'NAME' => 'Saham terdaftar di Bursa Efek', 'JENIS_BENTUK_AGUNAN' => 9],
        ['JENIS_AGUNAN' => 57, 'NAME' => 'ORI (Obligasi Negara Ritel) - SERI', 'JENIS_BENTUK_AGUNAN' => 9],
        ['JENIS_AGUNAN' => 76, 'NAME' => 'ORI(Oblligasi Ritel)Non Negara', 'JENIS_BENTUK_AGUNAN' => 9],
        ['JENIS_AGUNAN' => 76, 'NAME' => 'ORI(Oblligasi Ritel)Non Negara', 'JENIS_BENTUK_AGUNAN' => 9],
        ['JENIS_AGUNAN' => 79, 'NAME' => 'Sertifikat Reksadana', 'JENIS_BENTUK_AGUNAN' => 9],
        ['JENIS_AGUNAN' => 29, 'NAME' => 'Pesawat Terbang umur s/d 5 th', 'JENIS_BENTUK_AGUNAN' => 12],
        ['JENIS_AGUNAN' => 30, 'NAME' => 'Pesawat Terbang umur >5-10 th', 'JENIS_BENTUK_AGUNAN' => 12],
        ['JENIS_AGUNAN' => 31, 'NAME' => 'Pesawat Terbang umur > 10 th', 'JENIS_BENTUK_AGUNAN' => 12],
        ['JENIS_AGUNAN' => 95, 'NAME' => 'Pesawat terbang umur > 15 thn', 'JENIS_BENTUK_AGUNAN' => 12],
        ['JENIS_AGUNAN' => 96, 'NAME' => 'Pesawat terbang umur > 20 thn', 'JENIS_BENTUK_AGUNAN' => 12],
        ['JENIS_AGUNAN' => 54, 'NAME' => 'Personal Garansi', 'JENIS_BENTUK_AGUNAN' => 5],
        ['JENIS_AGUNAN' => 50, 'NAME' => 'Persediaan Hewan Ternak', 'JENIS_BENTUK_AGUNAN' => 8],
        ['JENIS_AGUNAN' => 53, 'NAME' => 'Jaminan Uang Muka atas Kontrak (non cash)', 'JENIS_BENTUK_AGUNAN' => 13],
        ['JENIS_AGUNAN' => 52, 'NAME' => 'Barang dagangan / Alat berat', 'JENIS_BENTUK_AGUNAN' => 13],
    ];

    private $dataSchema = ['Home Loan', 'Business Loan', 'Car Loan'];
    private $dataSubSchema = ['Sub Home Loan', 'Sub Business Loan', 'Sub Car Loan'];
    private $dataBranch = ["6013010", "6013470", "6023050", "6033070", "6043080", "6043460", "6053170", "6063420", "6063280", "6063600", "6063610", "6073290", "6083310", "6093330", "6103380", "6103520", "6123400", "6123490", "6123480", "6123590", "6143430", "6143450", "6153440", "6153360", "6153370", "6173180", "6173190"];


    public function run(): void
    {
        $desiredAmount = $this->command->ask("🤖 Analyzing optimal data generation parameters... How many data entries would you like to synthesize for the user?");

        $faker = Faker::create('id_ID');

        $current_date = date('dmy');
        $allTime = 0;

        $this->command->info("Started Automation for Seeding data CMS!");

        for ($i = 0; $i < $desiredAmount; $i++) {
            $this->command->info("------------------------------------------------------------------------------------------------");
            sleep(1);
            $startTime = microtime(true);

            $no = $i + 1;

            $this->command->info("🤖 Initializing data synthesis: Entry {$no} | Optimizing parameters... 🚀");

            // DATA DEBITUR
            $randomIndex = rand(0, count($this->dataAddress) - 1);
            $address = $this->dataAddress[$randomIndex];
            $CIF = $faker->unique()->numerify('30#######') . $faker->unique()->numberBetween(10000000, 99999999);
            $MAPID = 'MAPID-' . $faker->unique()->randomNumber(9);
            $TYPE_OF_CREDIT_FACILITY = $faker->numberBetween(1, 3);
            $NAME = $faker->name;
            $REGION = $faker->randomElement(['601601', '602602', '603603']);
            $ADDRESS = $faker->address;
            $LOAN_ACCOUNT_NUMBER = '20000000' . $faker->unique()->numberBetween(1000, 9999);

            // DATA KREDIT
            $randomSchema = rand(0, count($this->dataSchema) - 1);
            $COLLATERALID = str_pad(substr($REGION, -4), 4, '0', STR_PAD_LEFT) . $current_date . str_pad(substr($CIF, -4), 4, '0', STR_PAD_LEFT) . str_pad(substr($LOAN_ACCOUNT_NUMBER, -4), 4, '0', STR_PAD_LEFT);
            $SCHEMA = $this->dataSchema[$randomSchema];
            $SUBSCHEMA = $this->dataSubSchema[$randomSchema];
            $COMPANY = $faker->company;

            // DATA AGUNAN
            $indexAgunan = rand(0, count($this->dataJenisAgunan) - 1);
            $JENISAGUNAN = $this->dataJenisAgunan[$indexAgunan];
            $SUBJENISAGUNAN = $this->getSubJenisAgunan($JENISAGUNAN['JENIS_BENTUK_AGUNAN']);

            $this->command->info("🤖 Created with CIF \033[31m{$CIF}\033[32m | Optimizing parameters... 🚀");

            DB::table('LMSRETAIL_CMS_M_DEBTORDATA')->insert([
                'CIF' => $CIF,
                'MAPID' => $MAPID,
                'TYPE_OF_CREDIT_FACILITY' => $TYPE_OF_CREDIT_FACILITY,
                'DEBTOR_NAME' => $NAME,
                'REGION' => $REGION,
                'ADDRESS' => $ADDRESS,
                'CITY' => $address['CITY'], // Fake city
                'DISTRICT' => $address['DISTRICT'], // Fake district
                'SUB_DISTRICT' => $address['SUB_DISTRICT'], // Fake sub-district
                'PROVINCE' => $address['PROVINCE'], // Fake province
                'POSTAL_CODE' => $address['POSTAL_CODE'], // Fake postal code
                'IS_DELETE' => 'N', // Fixed value
                'LOAN_ACCOUNT_NUMBER' => $LOAN_ACCOUNT_NUMBER,
            ]);

            DB::table('LMSRETAIL_CMS_M_CREDITFACILITY')->insert([
                'INSERTIONORDERID' => $faker->unique()->numberBetween(1000, 9999),
                'MAPID' => $MAPID,
                'CIF' => $CIF,
                'COLLATERAL_ID' => $COLLATERALID,
                'LOAN_ACCOUNT_NUMBER' => $LOAN_ACCOUNT_NUMBER,
                'BNI_BRANCH' => $this->dataBranch[rand(0, count($this->dataBranch) - 1)],
                'MAXIMUM_CREDIT' => $faker->numberBetween(1000000, 500000000),
                'SCHEME' => $SCHEMA,
                'SUB_SCHEME' => $SUBSCHEMA,
                'PRODUCT' => $faker->numberBetween(1, 4),
                'FINANCING_PURPOSE' => $faker->randomElement(['Purchase', 'Construction', 'Renovation']),
                'PROPERTY_TYPE' => $faker->randomElement(['Residential', 'Commercial', 'Industrial']),
                'SPECIAL_PROGRAM' => $faker->randomElement(['Special Program A', 'Special Program ULTAH BNI', 'Special Program Wonder', 'Special Program KPR', 'Tidak Ada', 'Special Program Natal']),
                'PURCHASE_TYPE' => $faker->randomElement(['New Purchase', 'Kredit', 'Cash']),
                'TOP_DEVELOPER' => $COMPANY,
                'COMPANY_NAME' => $COMPANY,
                'COMPANY_NAME_OTHERS' => $faker->optional()->company,
                'COMPANY_TYPE' => $faker->randomElement(['Private', 'Public', 'Government']),
                'TYPE_OF_COMPANY_PKS_COOPERATION' => $faker->randomElement(['PKS', 'Cooperative']),
                'FINANCING_OBJECT_STATUS' => $faker->randomElement(['New', 'Used', 'Renov']),
                'INDENT_STATUS' => $faker->randomElement(['Not Indented', 'Indent']),
                'DEVELOPER_NAME' => $COMPANY . ' Developer',
                'DEVELOPMENT_AREA' => $faker->randomElement(['Area A', 'Area B', 'Area C', 'Area D']),
                'PROJECT' => 'Project ' . $faker->randomElement(['New', 'Existing', 'Current']),
                'PKS_NUMBER' => $faker->unique()->numerify('PKS#####'),
                'IS_DELETE' => 'N',
            ]);

            DB::table('LMSRETAIL_CMS_M_GENERALCOLLATERALINFO')->insert([
                'COLLATERAL_ID' => $COLLATERALID,
                'MAPID' => $MAPID,
                'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                'COLLATERAL_DOCUMENT_NUMBER' => $faker->numerify('DOC-######'),
                'COLLATERAL_DOCUMENT_DATE' => $faker->date(),
                'COLLATERAL_DOCUMENT_EXPIRY_DATE' => $faker->date(),
                'COLLATERAL_OWNERS_NAME' => $NAME,
                'COLLATERAL_OWNERS_ADDRESS' => $ADDRESS,
                'SUB_DISTRICT_OWNER' => $address['SUB_DISTRICT'],
                'DISTRICT_OWNER' => $address['DISTRICT'],
                'CITY_OWNER' => $address['CITY'],
                'PROVINCE_OWNER' => $address['PROVINCE'],
                'ADDRESS_COLLATERAL' => $faker->address,
                'SUB_DISTRICT_COLLATERAL' => $address['SUB_DISTRICT'],
                'DISTRICT_COLLATERAL' => $address['DISTRICT'],
                'CITY_COLLATERAL' => $address['CITY'],
                'PROVINCE_COLLATERAL' => $address['PROVINCE'],
                'PARI_PASSU_STATUS' => $faker->boolean ? 'Active' : 'Not Active',
                'SUB_TYPE_OF_COLLATERAL' => $SUBJENISAGUNAN,
                'COLLATERAL_STATUS_FOR_JOINT_ACCOUNT_CREDIT' => 'JointCreditStatus',
                'INSERTIONORDERID' => $faker->numberBetween(1000000, 500000000),
                'UPLOAD_COLLATERAL_DOCUMENT' => $faker->url,
                'WORKITEMNAME' => '-',
                'CREATED_BY' => $faker->userName,
                'CREATED_ON' => $faker->dateTime,
                'MESSAGE' => $faker->sentence,
                'IS_DELETE' => 'N',
                'COLLATERAL_STATUS' => $faker->numberBetween(1, 3),
                'COLLATERAL_CLASSIFICATION' => $faker->numberBetween(1, 2),
                'COLLATERAL_TYPE' => $JENISAGUNAN['JENIS_AGUNAN'],
                'COLLATERAL_FACTOR' => $faker->numberBetween(1, 2),
                'COLLATERAL_OWNERSHIP_STATUS' => $faker->numberBetween(1, 12),
                'POSTAL_CODE_OWNER' => $address['POSTAL_CODE'],
                'SURVEY_CERTIFICATE_NUMBER' => $faker->numerify('CERT-######'),
                'SURVEY_CERTIFICATE_DATE' => $faker->date(),
                'POSTAL_CODE_COLLATERAL' => $address['POSTAL_CODE'],
                'COLLATERAL_DESCRIPTION' => $faker->text(200),
                'BUILDING_PERMIT_OWNERSHIP' => $faker->numberBetween(1, 2),
                'BUILDING_PERMIT_NUMBER' => $faker->numerify('BPN-######'),
                'BUILDING_PERMIT_DATE' => $faker->date(),
                'BUILDING_PERMIT_OWNERS' => $faker->name,
                'COLLATERAL_DOCUMENT_REVIEW_DUE_DATE' => $faker->date(),
                'COLLATERAL_ID_ICONS' => $CIF,
            ]);

            // Feeding data Collateral Details
            switch ($JENISAGUNAN['JENIS_BENTUK_AGUNAN']) {
                case 1:
                    $BUILDING_AREA = $faker->numberBetween(50, 1000);
                    $NEW_REPRODUCTION_COST_VALUE = $faker->numberBetween(1000000, 10000000);
                    $NEW_REPRODUCTION_COST = $faker->numberBetween(1000000, 10000000);
                    $ADD_EFFECTIVE_AGE = $faker->randomFloat(2, 0, 10);
                    $EFFECTIVE_AGE = $faker->randomFloat(2, 0, 10);
                    $FLOOR_INDEX = $faker->randomFloat(2, 0, 10);
                    $DEPRECIATION = 1 - $EFFECTIVE_AGE / $ADD_EFFECTIVE_AGE;
                    $ADJUSTMENT = $faker->numberBetween(10, 20);
                    $BUILDING_VALUE_AFTER_FLOOR_INDEX = $NEW_REPRODUCTION_COST * $FLOOR_INDEX;
                    $BUILDING_VALUE_PER_M2 = $BUILDING_VALUE_AFTER_FLOOR_INDEX + ($BUILDING_VALUE_AFTER_FLOOR_INDEX * $ADJUSTMENT);
                    $MARKET_VALUE_OF_BUILDING_PER_M2 = $BUILDING_VALUE_PER_M2 - ($BUILDING_VALUE_PER_M2 * $DEPRECIATION);
                    $MARKET_AREA_VALUE_OF_BUILDING = $MARKET_VALUE_OF_BUILDING_PER_M2 * $BUILDING_AREA;

                    DB::table('LMSRETAIL_CMS_M_LAND_BUILDINGCOLLATERALDETAILS')->insert([
                        'GARAGE' => $faker->numberBetween(1, 3),
                        'LIVING_ROOM' => $faker->numberBetween(1, 3),
                        'KITCHEN' => $faker->numberBetween(1, 3),
                        'WAREHOUSE' => $faker->numberBetween(1, 3),
                        'MAIDS_ROOM' => $faker->numberBetween(1, 3),
                        'TERRACE' => $faker->numberBetween(1, 3),
                        'BALCONY' => $faker->numberBetween(1, 3),
                        'SWIMMING_POOL' => $faker->numberBetween(0, 2),
                        'ELECTRICITY_SUPPLY' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'INTERNET_CONNECTION' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'TELEPHONE_LINE' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'WATER_SOURCE' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'ROAD_CONDITION' => $faker->numberBetween(1, 3),
                        'EASE_OF_ACCESS' => $faker->numberBetween(1, 4),
                        'SHOPPING_CONVENIENCE' => $faker->numberBetween(1, 3),
                        'SCHOOL_CONVENIENCE' => $faker->numberBetween(1, 3),
                        'TRANSPORTATION_CONVENIENCE' => $faker->numberBetween(1, 3),
                        'RECREATION_CONVENIENCE' => $faker->numberBetween(1, 3),
                        'WORSHIP_PLACE' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'HOSPITAL' => $faker->randomElement(['Ada', 'Tidak Ada']),
                        'CRIME_POTENTIAL' => $faker->numberBetween(1, 3),
                        'FIRE_POTENTIAL' => $faker->numberBetween(1, 3),
                        'NATURAL_DISASTER_POTENTIAL' => $faker->numberBetween(1, 3),
                        'FUTURE_LAND_USE_PLANNING' => $faker->numberBetween(1, 4),
                        'ECONOMIC_LIFE' => $faker->numberBetween(1, 5),
                        'INTERSECTION_LOCATION' => $faker->randomElement(['Sutet', 'TPU', 'Tempat Pembuangan Sampah', 'Tempat Ibadah', 'Tidak Ada']),
                        'MARKETABILITY_AND_LIQUIDITY_OF_COLLATERAL' => $faker->numberBetween(1, 3),
                        'MARKET_CONDITION' => $faker->numberBetween(1, 4),
                        'DATA_SOURCE' => $faker->company,
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'ANALYSIS_RESULT_DESCRIPTION' => $faker->randomElement(['Baik Untuk Rumah', 'Baik', 'Kurang']),
                        'OCCUPIED_BY' => $faker->name,
                        'ZONE' => $faker->city,
                        'SUB_ZONE' => $faker->streetName,
                        'NJOP_BUILDING_VALUE' => $faker->numberBetween(1000000, 100000000),
                        'ADD_EFFECTIVE_AGE' => $ADD_EFFECTIVE_AGE,
                        'EFFECTIVE_AGE' => $EFFECTIVE_AGE,
                        'NEW_REPRODUCTION_COST' => $NEW_REPRODUCTION_COST,
                        'FLOOR_INDEX' => $FLOOR_INDEX,
                        'BUILDING_VALUE_AFTER_FLOOR_INDEX' => $BUILDING_VALUE_AFTER_FLOOR_INDEX,
                        'ADJUSTMENT' => $ADJUSTMENT,
                        'BUILDING_VALUE_PER_M2' => $BUILDING_VALUE_PER_M2,
                        'NEW_REPRODUCTION_COST_VALUE' => $NEW_REPRODUCTION_COST_VALUE,
                        'DEPRECIATION' => $DEPRECIATION,
                        'MARKET_VALUE_OF_BUILDING_PER_M2' => $MARKET_VALUE_OF_BUILDING_PER_M2,
                        'MARKET_AREA_VALUE_OF_BUILDING' => $MARKET_AREA_VALUE_OF_BUILDING,
                        'ELEVATION' => $faker->randomFloat(2, 0, 100),
                        'ID_COMPARISON_2' => null,
                        'ID_COMPARISON_3' => null,
                        'NJOP_LAND_VALUE' => $faker->numberBetween(1000000, 100000000),
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'ELEVATION_DISTANCE' => $faker->randomFloat(2, 0, 100),
                        'FRONT_WIDTH' => $faker->randomFloat(2, 0, 50),
                        'LAND_AREA' => $faker->numberBetween(100, 10000),
                        'YEAR_BUILT' => $faker->date(),
                        'YEAR_RENOVATED' => $faker->date(),
                        'BUILDING_AREA' => $BUILDING_AREA,
                        'BUILDING_AREA_ACCORDING_TO_BUILDING_PERMIT' => $faker->numberBetween(50, 1000),
                        'NUMBER_OF_FLOORS' => $faker->numberBetween(1, 5),
                        'NUMBER_OF_BEDROOMS' => $faker->numberBetween(1, 3),
                        'NUMBER_OF_BATHROOMS' => $faker->numberBetween(1, 3),
                        'ROAD_WIDTH_IN_FRONT_OF_OBJECT' => $faker->numberBetween(1, 3),
                        'ID_COMPARISON_1' => null,
                        'COLLATERAL_ID' => $COLLATERALID,
                        'MAPID' => $MAPID,
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'ALLOCATION' => $faker->randomElement(['Alokasi', 'Non Alokasi']),
                        'LAND_USE_COMPATIBILITY_OF_THE_COLLATERAL_LOCATION' => $faker->numberBetween(1, 2),
                        'LAND_SHAPE' => $faker->numberBetween(1, 6),
                        'COORDINATES_FROM_GOOGLE' => $faker->latitude . ', ' . $faker->longitude,
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'FOUNDATION' => $faker->numberBetween(1, 5),
                        'WALLS' => $faker->numberBetween(1, 5),
                        'CEILING' => $faker->numberBetween(1, 4),
                        'ROOF_STRUCTURE' => $faker->numberBetween(1, 4),
                        'WINDOW_FRAMES' => $faker->numberBetween(1, 5),
                        'ROOF' => $faker->numberBetween(1, 4),
                        'DOORS' => $faker->numberBetween(1, 4),
                        'WINDOWS' => $faker->numberBetween(1, 3),
                        'FLOOR_MATERIAL' => $faker->numberBetween(1, 5),
                        'ROOM_DIVIDERS' => $faker->numberBetween(1, 4),
                        'FENCE' => $faker->numberBetween(1, 5),
                        'NORTH_NORTHEAST_SIDE' => $faker->numberBetween(1, 4),
                        'SOUTH_SOUTHWEST_SIDE' => $faker->numberBetween(1, 4),
                        'EAST_SOUTHEAST_SIDE' => $faker->numberBetween(1, 4),
                        'WEST_NORTHWEST_SIDE' => $faker->numberBetween(1, 4),
                        'FAMILY_ROOM' => $faker->numberBetween(1, 3),
                        'CIF' => $CIF
                    ]);
                    break;
                case 2:
                    $BRANDS = [
                        'Toyota',
                        'Honda',
                        'Ford',
                        'Chevrolet',
                        'Nissan',
                        'Mercedes-Benz',
                        'BMW',
                        'Audi',
                        'Hyundai',
                        'Kia',
                        'Volkswagen',
                        'Mazda',
                        'Jeep',
                        'Lexus',
                        'Subaru',
                        'Mitsubishi',
                        'Tesla',
                        'Volvo',
                        'Suzuki',
                        'Land Rover'
                    ];

                    $MODELTYPES = [
                        'Toyota' => ['Corolla', 'Camry', 'Highlander', 'RAV4', 'Tacoma'],
                        'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Fit'],
                        'Ford' => ['F-150', 'Escape', 'Mustang', 'Explorer', 'Ranger'],
                        'Chevrolet' => ['Silverado', 'Malibu', 'Equinox', 'Camaro', 'Tahoe'],
                        'Nissan' => ['Altima', 'Rogue', 'Sentra', 'Murano', 'Titan'],
                        'Mercedes-Benz' => ['C-Class', 'E-Class', 'S-Class', 'GLC', 'GLE'],
                        'BMW' => ['3 Series', '5 Series', 'X5', 'X3', '7 Series'],
                        'Audi' => ['A4', 'A6', 'Q5', 'Q7', 'A3'],
                        'Hyundai' => ['Elantra', 'Santa Fe', 'Tucson', 'Sonata', 'Kona'],
                        'Kia' => ['Sorento', 'Optima', 'Sportage', 'Soul', 'Forte'],
                        'Volkswagen' => ['Golf', 'Passat', 'Tiguan', 'Jetta', 'Atlas'],
                        'Mazda' => ['Mazda3', 'Mazda6', 'CX-5', 'CX-9', 'MX-5 Miata'],
                        'Jeep' => ['Wrangler', 'Grand Cherokee', 'Cherokee', 'Renegade', 'Compass'],
                        'Lexus' => ['ES', 'RX', 'NX', 'IS', 'GX'],
                        'Subaru' => ['Impreza', 'Outback', 'Forester', 'Crosstrek', 'WRX'],
                        'Mitsubishi' => ['Outlander', 'Eclipse Cross', 'Mirage', 'Pajero', 'Lancer'],
                        'Tesla' => ['Model S', 'Model 3', 'Model X', 'Model Y'],
                        'Volvo' => ['XC90', 'S60', 'V60', 'XC60', 'XC40'],
                        'Suzuki' => ['Swift', 'Baleno', 'Vitara', 'Ertiga', 'Celerio'],
                        'Land Rover' => ['Range Rover', 'Discovery', 'Defender', 'Evoque', 'Freelander']
                    ];

                    $BRAND = $BRANDS[array_rand($BRANDS)];
                    $MODELTYPE = $MODELTYPES[$BRAND][array_rand($MODELTYPES[$BRAND])];

                    DB::table('LMSRETAIL_CMS_M_VEHICLECOLLATERALDETAILS')->insert([
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'MAPID' => $MAPID,
                        'COLLATERAL_ID' => $CIF,
                        'TYPE_OF_MOTOR_VEHICLE' => $faker->numberBetween(1, 5),
                        'BRAND' => $BRAND,
                        'MODEL_TYPE' => $MODELTYPE,
                        'YEAR_OF_MANUFACTURE' => $faker->date(),
                        'YEAR_OF_ASSEMBLY' => $faker->date(),
                        'CYLINDER_CAPACITY_ELECTRIC_POWER' => $faker->randomNumber(3) . ' cc',
                        'VEHICLE_COLOR' => $faker->safeColorName,
                        'CHASIS_NUMBER' => strtoupper($faker->bothify('??###??###??')),
                        'ENGINE_NUMBER' => strtoupper($faker->bothify('ENG##??##??###')),
                        'FUEL_ENERGY_SOURCE' => $faker->numberBetween(1, 3),
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'CONCLUSION_OF_ANALYSIS_RESULT' => $faker->randomElement(['Sangat Bagus', 'Baik', 'Kurang']),
                        'LICENSE_PLATE_NUMBER' => strtoupper($faker->bothify('?? #### ??')),
                        'ID_COMPARISON_1' => null,
                        'ID_COMPARISON_2' => null,
                        'ID_COMPARISON_3' => null,
                        'COLLATERAL_STATUS' => $faker->numberBetween(1, 3),
                        'COLLATERAL_CLASIFICATION' => $faker->numberBetween(1, 2),
                        'COLLATERAL_TYPE' => $JENISAGUNAN['JENIS_AGUNAN'],
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'COLLATERAL_FACTOR' => $faker->numberBetween(1, 2),
                        'COLLATERAL_OWNERSHIP_STATUS' => $faker->numberBetween(1, 12),
                        'COLLATERAL_DOCUMENT_NUMBER' => strtoupper($faker->bothify('DOC##??##??###')),
                        'COLLATERAL_DOCUMENT_DATE' => $faker->date,
                        'COLLATERAL_DOCUMENT_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+5 years')->format('Y-m-d'),
                        'UPLOAD_COLLATERAL_DOCUMENT' => $faker->fileExtension,
                        'WORKITEMNAME' => $faker->word,
                        'CREATED_BY' => $faker->name,
                        'MESSAGE' => $faker->sentence,
                        'IS_DELETE' => 'N',
                        'CREATED_ON' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                    ]);
                    break;
                case 3;
                    $BRANDS = [
                        'Caterpillar',
                        'Komatsu',
                        'Volvo',
                        'John Deere',
                        'Hitachi',
                        'Liebherr',
                        'Doosan',
                        'JCB',
                        'Case',
                        'Sany',
                        'Hyundai',
                        'Kubota',
                        'Terex',
                        'Mack',
                        'Bobcat',
                        'Manitou',
                        'New Holland',
                        'Kobelco',
                        'XCMG',
                        'Tadano'
                    ];

                    $MODELTYPES = [
                        'Caterpillar' => ['D6T Dozer', '320 Excavator', '140 Motor Grader', '950M Wheel Loader', '740 Articulated Truck'],
                        'Komatsu' => ['PC200-8 Excavator', 'D155AX-8 Dozer', 'WA380-8 Wheel Loader', 'HM300-5 Articulated Dump Truck', 'GD655-6 Motor Grader'],
                        'Volvo' => ['EC250E Excavator', 'L120H Wheel Loader', 'A40G Articulated Hauler', 'DD110C Compactor', 'EW160E Wheeled Excavator'],
                        'John Deere' => ['850K Dozer', '210G Excavator', '944K Wheel Loader', '310SL Backhoe Loader', '670G Motor Grader'],
                        'Hitachi' => ['ZX210LC-6 Excavator', 'ZAXIS 225USLC-3', 'EX120-5 Excavator', 'ZX350LC-5 Excavator', 'ZAXIS 470LCH-5'],
                        'Liebherr' => ['R 926 Compact', 'R 934 E', 'R 944 C', 'A 914 Compact', 'R 960 SME'],
                        'Doosan' => ['DX140LC-5 Excavator', 'DL220-5 Wheel Loader', 'DX225LC-5 Excavator', 'DL420CVT-5 Wheel Loader', 'DX350LC-5 Excavator'],
                        'JCB' => ['3CX Compact Backhoe', '456 HT Wheel Loader', 'JS220 Excavator', 'JZ140 Excavator', '225LC Excavator'],
                        'Case' => ['570N EP Tractor Loader', 'CX210C Excavator', 'CX250D Excavator', '885B Motor Grader', 'D Series Skid Steer'],
                        'Sany' => ['SY215C Excavator', 'SY500H Excavator', 'SY135C Excavator', 'SY365C Excavator', 'SY215S Excavator'],
                        'Hyundai' => ['R210LC-9S Excavator', 'R80CR-9A Mini Excavator', 'HL940A Wheel Loader', 'R500LC-9S Excavator', 'R300LC-9S Excavator'],
                        'Kubota' => ['KX080-4 Excavator', 'U55-4 Mini Excavator', 'SVL95-2S Compact Track Loader', 'KX057-4 Excavator', 'L2501 Tractor'],
                        'Terex' => ['PT-3000 Paver', 'TL100 Telehandler', 'TS14 Off-Highway Truck', 'HR16 Rough Terrain Forklift', 'TW70 Telehandler'],
                        'Mack' => ['Granite', 'Pinnacle', 'TerraPro', 'CHU613', 'MRU613'],
                        'Bobcat' => ['S70 Skid-Steer Loader', 'E165 Excavator', 'E85 Mini Excavator', 'T870 Compact Track Loader', 'S650 Skid-Steer Loader'],
                        'Manitou' => ['MT 1840', 'MRT 2150', 'MRT 1535', 'MHT 790', 'MT 732'],
                        'New Holland' => ['E485C Excavator', 'B95C Backhoe Loader', 'C332 Compact Track Loader', 'L218 Skid Steer', 'W170C Loader'],
                        'Kobelco' => ['SK210LC-10 Excavator', 'SK300LC-10 Excavator', 'SK500LC-10 Excavator', 'SK135SR-1E', 'SK350LC-10'],
                        'XCMG' => ['XE215C Excavator', 'LW300FN Loader', 'QY25K5 Crane', 'XZJ5380THB', 'XS143J Roller'],
                        'Tadano' => ['GR-1000XL', 'ATF 220G-5', 'ATF 400G-6', 'GT-600EL', 'TG-500E']
                    ];

                    // Example of selecting a random brand and its corresponding model type
                    $BRAND = $BRANDS[array_rand($BRANDS)];
                    $MODELTYPE = $MODELTYPES[$BRAND][array_rand($MODELTYPES[$BRAND])];

                    DB::table('LMSRETAIL_CMS_M_HEAVYEQUIPMENTCOLLATERALDETAILS')->insert([
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'COLLATERAL_ID' => $COLLATERALID,
                        'MAPID' => $MAPID,
                        'TYPE_OF_HEAVY_EQUIPMENT' => $faker->numberBetween(1, 10),
                        'BRAND_TYPE' => $BRAND,
                        'MODEL_TYPE' => $MODELTYPE,
                        'EQUIPMENT_USED_FOR' => $faker->randomElement(['Construction', 'Mining', 'Agriculture', 'Logistics']),
                        'YEAR_OF_MANUFACTURE' => $faker->year,
                        'YEAR_OF_ASSEMBLY' => $faker->year,
                        'CYLINDER_CAPACITY' => $faker->randomNumber(4) . ' cc',
                        'INSTALED_CAPACITY' => $faker->randomNumber(5) . ' kW',
                        'CHASSIS_NUMBER' => strtoupper($faker->bothify('??###??###??')),
                        'ENGINE_NUMBER' => strtoupper($faker->bothify('ENG##??##??###')),
                        'USAGE_FREQUENCY' => $faker->randomElement(['High', 'Medium', 'Low']),
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'CONCLUSION_OF_ANALYSIS_RESULT' => $faker->randomElement(['Sangat Bagus', 'Baik', 'Kurang']),
                        'ID_COMPARISON_1' => null,
                        'ID_COMPARISON_2' => null,
                        'ID_COMPARISON_3' => null,
                        'COLLATERAL_STATUS' => $faker->numberBetween(1, 3),
                        'COLLATERAL_CLASIFICATION' => $faker->numberBetween(1, 2),
                        'COLLATERAL_TYPE' => $JENISAGUNAN['JENIS_AGUNAN'],
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'COLLATERAL_FACTOR' => $faker->randomElement(['High', 'Medium', 'Low']),
                        'COLLATERAL_OWNERSHIP_STATUS' => $faker->numberBetween(1, 12),
                        'COLLATERAL_DOCUMENT_NUMBER' => strtoupper($faker->bothify('DOC##??##??###')),
                        'COLLATERAL_DOCUMENT_DATE' => $faker->date,
                        'COLLATERAL_DOCUMENT_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+5 years')->format('Y-m-d'),
                        'UPLOAD_COLLATERAL_DOCUMENT' => $faker->fileExtension,
                        'IS_DELETE' => 'N',
                    ]);

                    break;
                case 4:
                    $BRANDS = [
                        'Caterpillar',
                        'Komatsu',
                        'John Deere',
                        'Volvo',
                        'Hitachi',
                        'CASE',
                        'JCB',
                        'Bobcat',
                        'New Holland',
                        'Doosan',
                        'Kobelco',
                        'SANY',
                        'Liebherr',
                        'Manitou',
                        'Terex',
                        'IHI',
                        'Takeuchi',
                        'Atlas Copco',
                        'Gradall',
                        'Ingersoll Rand'
                    ];

                    $MODELTYPES = [
                        'Caterpillar' => ['CAT 320', 'CAT 330', 'CAT D6', 'CAT 420', 'CAT 950'],
                        'Komatsu' => ['PC200', 'PC300', 'WA380', 'D61PX', 'GD655'],
                        'John Deere' => ['350G', '450K', '772G', '160G', '210G'],
                        'Volvo' => ['EC950F', 'EC480E', 'L350H', 'A40G', 'L120H'],
                        'Hitachi' => ['ZX210', 'ZX350', 'ZAXIS 200', 'EX120', 'ZX140'],
                        'CASE' => ['CX210C', 'CX250D', '570N EP', 'TR320', 'SR250'],
                        'JCB' => ['JCB 3CX', 'JCB 4CX', 'JS130', 'JS220', 'JS360'],
                        'Bobcat' => ['S650', 'E165', 'E32', 'T870', 'E85'],
                        'New Holland' => ['E485C', 'C237', 'B95C', 'L218', 'L230'],
                        'Doosan' => ['DX140', 'DX225', 'DL420', 'DX380', 'DL200'],
                        'Kobelco' => ['SK210', 'SK300', 'SK350', 'SK500', 'SK130'],
                        'SANY' => ['SY215', 'SY335', 'SY500H', 'SY135', 'SY80U'],
                        'Liebherr' => ['R 916', 'R 924', 'R 936', 'R 950', 'R 980'],
                        'Manitou' => ['MT 1840', 'MRT 2150', 'MRT 1535', 'MHT 790', 'MRT 2540'],
                        'Terex' => ['TL210', 'TL260', 'HR16', 'TC16', 'TS14'],
                        'IHI' => ['IC35', 'IC50', 'IC70', 'IC100', 'IC130'],
                        'Takeuchi' => ['TB260', 'TB280FR', 'TL12', 'TB216', 'TB240'],
                        'Atlas Copco' => ['EC750', 'EC950', 'XAS 185', 'XAS 37', 'XAS 230'],
                        'Gradall' => ['G660', 'G3-42', 'G3-37', 'G6-34', 'G8-42'],
                        'Ingersoll Rand' => ['D100', 'SD100', 'DD24', 'SD45', 'DD110']
                    ];

                    $BRAND = $BRANDS[array_rand($BRANDS)];
                    $MODELTYPE = $MODELTYPES[$BRAND][array_rand($MODELTYPES[$BRAND])];

                    DB::table('LMSRETAIL_CMS_M_MACHINERYCOLLATERALDETAILS')->insert([
                        'ID' => $faker->numberBetween(1000, 1000000),
                        'COLLATERAL_ID' => $COLLATERALID,
                        'MAPID' => $MAPID,
                        'TYPE_OF_MACHINERY_AND_EQUIPMENT' => $faker->randomElement(['Manufacturing', 'Processing', 'Construction', 'Agriculture']),
                        'MACHINE_NAME' => $MODELTYPE,
                        'BRAND' => $BRAND,
                        'MACHINE_MANUFACTURER_NAME' => $BRAND,
                        'MACHINE_TYPE' => $faker->randomElement(['Lathe', 'Drill', 'Compressor', 'Excavator']),
                        'MACHINE_SERIAL_NUMBER' => strtoupper($faker->bothify('SER##??##??###')),
                        'YEAR_OF_ASSEMBLY' => $faker->date(),
                        'FUNCTIONAL_OBSOLESCENCE' => $faker->randomElement(['Low', 'Medium', 'High']),
                        'REMAINING_ECONOMIC_LIFE' => $faker->numberBetween(1, 20) . ' years',
                        'INSTALLED_CAPACITY' => $faker->numberBetween(1000, 5000) . ' kW',
                        'PRODUCTION_CAPACITY' => $faker->numberBetween(100, 1000) . ' units/hour',
                        'AUXILIARY_EQUIPMENT' => $faker->randomElement(['Compressor', 'Conveyor Belt', 'Cooling Unit']),
                        'DRIVE_SYSTEM_AND_UNITS' => $faker->randomElement(['Hydraulic', 'Electric', 'Mechanical']),
                        'CONTROL_EQUIPMENT' => $faker->randomElement(['Manual', 'Semi-Automated', 'Automated']),
                        'INSTALLATION' => $faker->sentence,
                        'FOUNDATION' => $faker->randomElement(['Concrete', 'Steel Frame']),
                        'WORK_FLOOR' => $faker->randomElement(['Smooth Concrete', 'Anti-Slip Surface']),
                        'SUPPORTING_STRUCTURE' => $faker->randomElement(['Steel Beams', 'Reinforced Concrete']),
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'CONCLUSION_OF_ANALYSIS_RESULTS' => $faker->sentence,
                        'ID_COMPARISON_1' => $faker->uuid,
                        'ID_COMPARISON_2' => $faker->uuid,
                        'ID_COMPARISON_3' => $faker->uuid,
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'COLLATERAL_STATUS' => $faker->numberBetween(1, 3),
                        'COLLATERAL_CLASIFICATION' => $faker->numberBetween(1, 2),
                        'COLLATERAL_TYPE' => $JENISAGUNAN['JENIS_AGUNAN'],
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'COLLATERAL_FACTOR' => $faker->randomElement(['High', 'Medium', 'Low']),
                        'COLLATERAL_OWNERSHIP_STATUS' => $faker->numberBetween(1, 12),
                        'COLLATERAL_DOCUMENT_NUMBER' => strtoupper($faker->bothify('DOC##??##??###')),
                        'COLLATERAL_DOCUMENT_DATE' => $faker->date,
                        'COLLATERAL_DOCUMENT_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+5 years')->format('Y-m-d'),
                        'UPLOAD_COLLATERAL_DOCUMENT' => $faker->fileExtension,
                        'CIF' => $CIF,
                        'WORKITEMNAME' => $faker->word,
                        'CREATED_ON' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s'),
                        'CREATED_BY' => $faker->name,
                        'MESSAGE' => $faker->sentence,
                        'IS_DELETE' => 'N',
                    ]);

                    break;
                case 5:
                case 6:
                case 8:
                case 9:
                case 13:
                    DB::table('LMSRETAIL_CMS_M_OTHERCOLLATERALDETAILS')->insert([
                        'MAPID' => $MAPID,
                        'COLLATERAL_ISSUER' => $faker->company,
                        'COLLATERAL_RATING_AGENCY' => $faker->randomElement(['Moody\'s', 'S&P', 'Fitch Ratings']),
                        'COLLATERAL_RATING_TYPE' => $faker->randomElement(['Long Term', 'Short Term', 'Subordinated']),
                        'COLLATERAL_ISSUER_RATING' => $faker->randomElement(['AA', 'A+', 'BB', 'B-', 'CC']),
                        'COLLATERAL_RATING_DATE' => $faker->date,
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'WORKITEMNAME' => $faker->word,
                        'CREATED_BY' => $faker->name,
                        'CREATED_ON' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s'),
                        'MESSAGE' => $faker->sentence,
                        'IS_DELETE' => $faker->boolean,
                        'COLLATERAL_ID' => $COLLATERALID,
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'CCY_NOMINAL' => $faker->randomElement(['USD', 'IDR', 'EUR', 'GBP']),
                        'COLLATERAL_VALUE' => $faker->numberBetween(100000, 10000000),
                    ]);

                    break;
                case 10:
                    $BRANDS = [
                        'Boeing',
                        'Airbus',
                        'Lockheed Martin',
                        'Embraer',
                        'Bombardier',
                        'Cessna',
                        'Piper',
                        'Dassault',
                        'Honda Aircraft',
                        'Sukhoi'
                    ];

                    $MODELTYPES = [
                        'Boeing' => ['737', '747', '767', '777', '787'],
                        'Airbus' => ['A220', 'A320', 'A330', 'A350', 'A380'],
                        'Lockheed Martin' => ['C-130 Hercules', 'F-22 Raptor', 'F-35 Lightning II'],
                        'Embraer' => ['E170', 'E175', 'E190', 'E195'],
                        'Bombardier' => ['CRJ200', 'CRJ700', 'CRJ900', 'Q400'],
                        'Cessna' => ['172 Skyhawk', '182 Skylane', '206 Stationair'],
                        'Piper' => ['PA-28 Cherokee', 'PA-34 Seneca', 'M-Class'],
                        'Dassault' => ['Falcon 7X', 'Falcon 8X', 'Falcon 2000'],
                        'Honda Aircraft' => ['HondaJet'],
                        'Sukhoi' => ['Superjet 100', 'Su-57'],
                    ];

                    $BRAND = $BRANDS[array_rand($BRANDS)];
                    $MODELTYPE = $MODELTYPES[$BRAND][array_rand($MODELTYPES[$BRAND])];

                    DB::table('LMSRETAIL_CMS_M_AIRCRAFTCOLLATERALDETAILS')->insert([
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'MAPID' => $MAPID,
                        'COLLATERAL_ID' => $COLLATERALID,
                        'CERTIFICATE_OF_REGISTRATION' => $faker->bothify('CERT-####-####'),
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'BILL_OF_SALE_NUMBER' => $faker->numerify('BOS-#####'),
                        'BILL_OF_SALE_DATE' => $faker->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
                        'MANUFACTURE_DATE' => $faker->dateTimeBetween('-20 years', '-10 years')->format('Y-m-d'),
                        'DESCRIPTION' => $faker->sentence,
                        'AIRCRAFT_TYPE' => $faker->randomElement(['Helicopter', 'Jet', 'Commercial Airplane', 'Cargo Airplane']),
                        'AIRCRAFT_SERIAL_NUMBER' => $faker->bothify('SN-###-####'),
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'IS_DELETE' => 'N',
                    ]);

                    break;
                case 12:
                    $BRANDS = [
                        'Maersk',
                        'MSC',
                        'CMA CGM',
                        'Evergreen',
                        'Hapag-Lloyd',
                        'COSCO',
                        'APL',
                        'Yang Ming',
                        'ONE',
                        'ZIM'
                    ];

                    $MODELTYPES = [
                        'Maersk' => ['Triple E', 'Post-Panamax', 'Panamax'],
                        'MSC' => ['Gulsun', 'Oscar', 'Magnifica'],
                        'CMA CGM' => ['Benjamin Franklin', 'Marco Polo', 'Gérard Schmitter'],
                        'Evergreen' => ['Ever Given', 'Ever Ace', 'Ever Lambent'],
                        'Hapag-Lloyd' => ['Hamburg Express', 'Madrid Express', 'Vancouver Express'],
                        'COSCO' => ['Cosco Shipping Universe', 'Cosco Shipping Panama', 'Cosco Shipping Aries'],
                        'APL' => ['APL Raffles', 'APL Lantau', 'APL Merlion'],
                        'Yang Ming' => ['YM Evolution', 'YM Imagination', 'YM Uniformity'],
                        'ONE' => ['ONE Stork', 'ONE Minato', 'ONE Cheetah'],
                        'ZIM' => ['ZIM Vancouver', 'ZIM Constanza', 'ZIM Luanda'],
                    ];

                    $BRAND = $BRANDS[array_rand($BRANDS)];
                    $MODELTYPE = $MODELTYPES[$BRAND][array_rand($MODELTYPES[$BRAND])];


                    DB::table('LMSRETAIL_CMS_M_SHIPCOLLATERALDETAILS')->insert([
                        'COLLATERAL_ID' => $COLLATERALID,
                        'MAPID' => $MAPID,
                        'ID_COMPARISON_1' => null,
                        'ID_COMPARISON_2' => null,
                        'ID_COMPARISON_3' => null,
                        'TYPE_OF_SHIP' => $faker->numberBetween(1, 21),
                        'SHIP_NAME' => $MODELTYPE . ' Ship',
                        'OWNERS_NAME' => $faker->name,
                        'BRAND_OF_PROPULSION_ENGINE' => $BRAND,
                        'NUMBER_OF_PROPULSION_ENGINES' => $faker->numberBetween(1, 4),
                        'PROPULSION_ENGINE_POWER' => $faker->numberBetween(500, 5000),
                        'LENGTH' => $faker->randomFloat(2, 50, 300) . ' m',
                        'WIDTH' => $faker->randomFloat(2, 10, 50) . ' m',
                        'DEPTH' => $faker->randomFloat(2, 5, 20) . ' m',
                        'LENGTH_OVER_ALL_LOA' => $faker->randomFloat(2, 55, 310) . ' m',
                        'GROSS_TONNAGE' => $faker->numberBetween(100, 100000),
                        'NET_TONNAGE' => $faker->numberBetween(50, 80000),
                        'HULL_IDENTIFICATION_NUMBER' => $faker->bothify('HULL-#######'),
                        'CITY_OF_MANUFACTURE' => $address['CITY'],
                        'UPLOAD_COLLATERAL_PHOTO' => $faker->imageUrl(),
                        'COLLATERAL_CONDITION' => $faker->numberBetween(1, 5),
                        'SHIPS_FLAG_COUNTRY' => $faker->country,
                        'CONCLUSION_OF_ANALYSIS_RESULTS' => $faker->sentence,
                        'INSERTIONORDERID' => $faker->unique()->numberBetween(1000000, 100000000),
                        'COLLATERAL_STATUS' => $faker->numberBetween(1, 3),
                        'COLLATERAL_CLASIFICATION' => $faker->numberBetween(1, 2),
                        'COLLATERAL_TYPE' => $JENISAGUNAN['JENIS_AGUNAN'],
                        'COLLATERAL_FORM_TYPE' => $JENISAGUNAN['JENIS_BENTUK_AGUNAN'],
                        'COLLATERAL_FACTOR' => $faker->randomElement(['High', 'Medium', 'Low']),
                        'COLLATERAL_OWNERSHIP_STATUS' => $faker->numberBetween(1, 12),
                        'COLLATERAL_DOCUMENT_NUMBER' => $faker->numerify('DOC-######'),
                        'COLLATERAL_DOCUMENT_DATE' => $faker->date('Y-m-d'),
                        'COLLATERAL_DOCUMENT_EXPIRY_DATE' => $faker->date('Y-m-d', '+5 years'),
                        'UPLOAD_COLLATERAL_DOCUMENT' => $faker->imageUrl(),
                        'CIF' => $CIF,
                        'YEAR_OF_MANUFACTURE' => $faker->date(),
                        'WORKITEMNANE' => $faker->word,
                        'CREATED_BY' => $faker->name,
                        'CREATED_ON' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                        'MESSAGE' => $faker->sentence,
                        'IS_DELETE' => 'N',
                    ]);

                    break;
                default:
                    break;
            }

            $PERUSAHAANASURANSIES = DB::table('LMSRETAIL_CMS_M_REKANANASURANSI')->select('NAMA_ASURANSI')->get();

            if ($PERUSAHAANASURANSIES->isEmpty()) {
                $this->command->info("🤖 \033[31mPERUSAHAAN ASURANSI NOT FOUND\033[32m 🚀");
                return;
            }

            $PERUSAHAANASURANSI = $PERUSAHAANASURANSIES?->random()->nama_asuransi;

            $INSURANCE_PREMIUM_AMOUNT = $faker->randomFloat(2, 100, 10000);
            $REBATE = $faker->randomFloat(2, 0, 5);
            $SERVICE_FEE_AMOUNT = $INSURANCE_PREMIUM_AMOUNT * $REBATE;


            // Feeding Insurance
            DB::table('LMSRETAIL_CMS_M_INSURANCE')->insert([
                'ID' => $faker->unique()->numberBetween(1000, 9999),
                'INSURANCE_COVERAGE_STATUS' => $faker->numberBetween(1, 2),
                'TYPE_OF_INSURANCE' => $faker->numberBetween(1, 4),
                'INSURER_NAME' => $PERUSAHAANASURANSI,
                'INSURER_STATUS' => $faker->numberBetween(1, 2),
                'INSURANCE_CURRENCY' => $faker->numberBetween(1, 2),
                'INSURANCE_COVERAGE_AMOUNT' => $faker->randomFloat(2, 1000, 1000000),
                'INSURANCE_POLICY_NUMBER' => $faker->bothify('####-???-###'),
                'INSURANCE_POLICY_DATE' => $faker->date(),
                'INSURANCE_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
                'BANKERS_CLAUSE_STATUS' => $faker->numberBetween(1, 2),
                'UPLOAD_INSURANCE_DOCUMENT' => $faker->fileExtension,
                'INSURANCE_COVERAGE_CONFIRMATION' => $faker->numberBetween(1, 2),
                'INSURANCE_ORDER_DATE' => $faker->date(),
                'INSURANCE_PREMIUM_AMOUNT' => $INSURANCE_PREMIUM_AMOUNT,
                'INSURANCE_ADMINISTRATION_FEE' => $faker->randomFloat(2, 10, 500),
                'REBATE' => $REBATE,
                'SERVICE_FEE_AMOUNT' => $SERVICE_FEE_AMOUNT,
                'INSURANCE_STATUS' => $faker->numberBetween(1, 3),
                'COLLATERAL_ID' => $COLLATERALID,
                'MAPID' => $MAPID,
                'INSERTIONORDERID' => $faker->unique()->numberBetween(1000, 999999999),
                'WORKITEMNAME' => $faker->word,
                'CREATEDBY' => $faker->name,
                'CREATEDON' => $faker->dateTime()->format('Y-m-d H:i:s'),
                'MESSAGE' => $faker->sentence,
                'IS_DELETE' => 'N',
            ]);


            $JENISPENGIKATANS = [
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Hak Tanggungan',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'SKMHT'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Fidusia Notarill',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'BPKB'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Fidusia Bawah Tangan',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Invoice/Faktur'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'PPJPK Notarill',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Akta PPJPK(Perjanjian Penyerahan Jaminan dan Pemberian Kuasa)'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'PPJPK Bawah Tangan',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'PPJPK - (Perjanjian Penyerahan Jaminan dan Pemberian Kuasa)'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Gadai Bawah Tangan',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Perjanjian Gadai'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'International Interest',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'COR (Certificate of Registration)'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Personal Guarantee Notarill',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Akta Personal Guarantee'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Hipotek Kapal',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Surat Kuasa Membebankan Hipotek Kapal'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'PPHPGR (Perjanjian Pengalihan Hak dan Penerimaan Ganti Rugi)',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Surat Kepemilikan Kios (SHPTU)'
                ],
                [
                    'JENIS_PENGIKATAN_AGUNAN' => 'Cessie',
                    'JENIS_DOK_PENGIKATAN_AGUNAN' => 'Piutang'
                ]
            ];

            $JENISPENGIKATAN = $JENISPENGIKATANS[array_rand($JENISPENGIKATANS)];

            switch ($JENISAGUNAN['JENIS_BENTUK_AGUNAN']) {
                case 1:
                    $JENISAGUNAN = $JENISPENGIKATANS[0];
                    break;
                case 2:
                    $JENISAGUNAN = $JENISPENGIKATANS[1];
                    break;
                case 3:
                    $JENISAGUNAN = $JENISPENGIKATANS[2];
                    break;
                case 4:
                    $JENISAGUNAN = $JENISPENGIKATANS[2];
                    break;
                case 10:
                    $JENISAGUNAN = $JENISPENGIKATANS[8];
                    break;
                case 12:
                    $JENISAGUNAN = $JENISPENGIKATANS[6];
                    break;
                default:
                    $JENISAGUNAN = $JENISPENGIKATANS[4];
            }

            $PERUSAHAANNOTARIES = DB::table('LMSRETAIL_CMS_M_REKANANNOTARIS')->select('NOTARIS_PPAT')->get();
            if ($PERUSAHAANNOTARIES->isEmpty()) {
                $this->command->info("🤖 \033[31mPERUSAHAAN NOTARIS NOT FOUND\033[32m 🚀");
                return;
            }
            $PERUSAHAANNOTARIS = $PERUSAHAANNOTARIES->random();

            // Feeding Notary
            DB::table('LMSRETAIL_CMS_M_NOTARYPROCESS')->insert([
                'MAPID' => $MAPID,
                'COLLATERAL_ID' => $COLLATERALID,
                'COLLATERAL_BINDING_TYPE' => $JENISPENGIKATAN['JENIS_PENGIKATAN_AGUNAN'],
                'BINDING_DOCUMENT_TYPE' => $JENISPENGIKATAN['JENIS_DOK_PENGIKATAN_AGUNAN'],
                'BINDING_COVER_NOTE_NUMBER' => $faker->bothify('DOC-####-??##'),
                'BINDING_COVER_NOTE_DATE' => $faker->date(),
                'BINDING_COVER_NOTE_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
                'NOTARY_NAME' => $PERUSAHAANNOTARIS->notaris_ppat,
                'DOCUMENT_CERTIFICATE_NUMBER_OF_BINDING' => $faker->bothify('BIND-CERT-??##'),
                'BINDING_DOCUMENT_DATE' => $faker->date(),
                'BINDING_STATUS' => $faker->numberBetween(1, 3),
                'BINDING_CURRENCY' => '1',
                'BINDING_AMOUNT' => $faker->randomFloat(2, 1000, 1000000),
                'COLLATERAL_CONTROL' => $faker->numberBetween(1, 2),
                'BINDING_RANK' => $faker->numberBetween(1, 10),
                'UPLOAD_NOTARY_DOCUMENT' => $faker->fileExtension,
                'PROCESSING_OR_BINDING_ORDER_DATE' => $faker->date(),
                'NOTARY_PROCESS_SLA' => $faker->numberBetween(1, 30),
                'ISSUE_CATEGORY' => $faker->numberBetween(1, 5),
                'ISSUE_SUBCATEGORY' => $faker->numberBetween(1, 5),
                'OWNERSHIP_EVIDENCE_COVER_NOTE_NUMBER' => $faker->bothify('OWN-CERT-##-??##'),
                'OWNERSHIP_EVIDENCE_COVER_NOTE_DATE' => $faker->date(),
                'PROCESSING_OR_OWNERSHIP_EVIDENCE_ORDER_DATE' => $faker->date(),
                'OWNERSHIP_EVIDENCE_COVER_NOTE_EXPIRY_DATE' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
                'NOTARY_NAME_FOR_OWNERSHIP_EVIDENCE' => $faker->name,
                'PRODUCT_ID' => $faker->numberBetween(1, 4),
                'PERCENT_PENGIKATAN' => $faker->randomFloat(2, 0, 100),
                'VALUE_PENGIKATAN' => $faker->randomFloat(2, 1000, 1000000),
                'INSERTIONORDERID' => $faker->unique()->numberBetween(1000, 9999999),
                'WORKITEMNAME' => $faker->word,
                'CREATEDBY' => $faker->name,
                'CREATEDON' => $faker->dateTime()->format('Y-m-d H:i:s'),
                'MESSAGE' => $faker->sentence,
                'IS_DELETE' => 'N',
            ]);


            $GENERALAPRAISALID = $faker->unique()->numerify('GENAPR####');



            $KJPP = DB::table('LMSRETAIL_CMS_M_PERUSAHAANREKANAN')->get()->random();
            $SURVEYOR1 = DB::table('LMSRETAIL_CMS_M_PERSONILPERUSAHAANREKANAN')
                ->where('ID_PERUSAHAAN', $KJPP->id)
                ->get();
            $SURVEYOR2 = DB::table('LMSRETAIL_CMS_M_PERSONILPERUSAHAANREKANAN')
                ->where('ID_PERUSAHAAN', $KJPP->id)
                ->get();

            if ($SURVEYOR2->isEmpty() || $SURVEYOR1->isEmpty()) {
                $SURVEYOR1 = $faker->name();
                $SURVEYOR2 = $faker->name();
            } else {
                $SURVEYOR1 = $SURVEYOR1->random()->pemimpin_rekan_atau_rekan;
                $SURVEYOR2 = $SURVEYOR2->random()->pemimpin_rekan_atau_rekan;
            }


            // // Taksasi General
            DB::table('LMSRETAIL_CMS_M_GENERALAPPRAISALINFORMATION')->insert([
                'MAPID' => $MAPID,
                'VALUATION_PURPOSE' => $faker->numberBetween(1, 2),
                'VALUATION_APPROACH' => $faker->numberBetween(1, 3),
                'VALUER_SURVEYOR_NAME_1' => substr($SURVEYOR1, 0, 50),
                'SURVEYOR_POSITION_1' => 'Pemimpin Rekan atau Rekan',
                'VALUER_SURVEYOR_NAME_2' => substr($SURVEYOR2, 0, 50),
                'SURVEYOR_POSITION_2' => 'Pemimpin Rekan atau Rekan',
                'KJPP_NAME' => substr($KJPP->nama_perusahaan, 0, 50),
                'KJPP_ADDRESS' => $faker->address,
                'VALUATION_DATE' => $faker->date(),
                'VALUATION_YEAR' => $faker->date(),
                'VALUATION_REVIEW_EXPIRY_DATE' => $faker->date(),
                'KJPP_BRANCH' => $faker->city(),
                'KJPP_EMAIL' => $faker->companyEmail(),
                'VALUER_SURVEYOR_EMAIL_1' => $faker->email(),
                'VALUER_SURVEYOR_PHONE_NUMBER_1' => $faker->phoneNumber(),
                'VALUER_SURVEYOR_2_EMAIL' => $faker->email(),
                'VALUER_SURVEYOR_PHONE_NUMBER_2' => $faker->phoneNumber(),
                'WORKITEMNAME' => $faker->sentence(2),
                'CREATED_BY' => $faker->name(),
                'CREATED_ON' => $faker->dateTime(),
                'MESSAGE' => $faker->sentence(),
                'IS_DELETE' => 'N',
                'COLLATERAL_ID' => $COLLATERALID
            ]);

            // Detail Taksasi
            DB::table('LMSRETAIL_CMS_M_APPRAISALRESULT')->insert([
                'INSERTIONORDERID' => $faker->unique()->numberBetween(1, 9999999999),
                'MAPID' => $MAPID,
                'BANK_VALUATION_VALUE' => $faker->randomFloat(2, 10000, 1000000),
                'KJPP_VALUATION_VALUE' => $faker->randomFloat(2, 10000, 1000000),
                'MARKET_OFFER_VALUE' => $faker->randomFloat(2, 10000, 1000000),
                'LIQUIDATION_VALUE' => $faker->randomFloat(2, 10000, 1000000),
                'IS_DELETE' => 'N',
                'COLLATERAL_SUITABILITY' => $faker->randomElement(['Suitable', 'Not Suitable', 'Pending']),
                'COLLATERAL_ID' => $COLLATERALID,
                'GENAPR_ID' => $GENERALAPRAISALID
            ]);

            // Link Age
            DB::table('LMSRETAIL_CMS_M_COLLATERALLINKAGE')->insert([
                'ID' => $faker->unique()->numberBetween(1000, 9999999),
                'COLLATERAL_ID' => $COLLATERALID,
                'LOAN_ACCOUNT_NUMBER' => $faker->numerify('LN######'), // Example format: LN123456
                'BINDING_ALLOCATION_FORM' => $faker->randomElement(['Full Collateral Allocation', 'Partial Collateral Allocation', 'Cross Collateral Allocation', 'Joint Collateral Allocation', 'Shared Collateral Allocation', 'Reserve Collateral Allocation', 'Contingency Collateral Allocation', 'Specific Collateral Allocation', 'Composite Collateral Allocation', 'Proportional Collateral Allocation']),
                'BINDING_ALLOCATION_VALUE' => $faker->randomFloat(2, 1000, 100000),
                'COLLATERAL_LINK_STATUS' => $faker->randomElement(['Active', 'inactive']),
                'IS_DELETE' => 'N',
            ]);

            // Link Age Array
            // DB::table('LMSRETAIL_CMS_M_COLLATERALLINKAGEARRAY')->insert([
            //     'INSERTIONORDERID' => $faker->unique()->numberBetween(1000, 9999999),
            //     'MAPID' => $MAPID,
            //     'ID' => $faker->unique()->numberBetween(1000, 9999999),
            //     'BINDING_ALLOCATION_FORM' => $faker->randomElement(['Full Collateral Allocation', 'Partial Collateral Allocation', 'Cross Collateral Allocation', 'Joint Collateral Allocation', 'Shared Collateral Allocation', 'Reserve Collateral Allocation', 'Contingency Collateral Allocation', 'Specific Collateral Allocation', 'Composite Collateral Allocation', 'Proportional Collateral Allocation']),
            //     'BINDING_ALLOCATION_VALUE' => $faker->randomFloat(2, 1000, 100000),
            //     'COLLATERAL_LINK_STATUS' => $faker->randomElement(['Active', 'inactive']),
            //     'COLLATERAL_TRANSACTION_DETAILS' => $faker->sentence,
            //     'PRODUCT_TRANSCTION_DETAIL' => $faker->sentence,
            //     'PERCENTAGE_LINKAGE_NUMBER' => $faker->randomFloat(2, 0, 100),
            //     'DEFAULT_LINKAGE' => $faker->randomFloat(2, 1000000, 1000000000),
            //     'AVAILABLE_LINKAGE' => $faker->randomFloat(2, 1000000, 1000000000),
            //     'COLLATERAL_ID' => $COLLATERALID,
            //     'LOAN_ACCOUNT_NUMBER' => $LOAN_ACCOUNT_NUMBER,
            //     'WORKITEMNAME' => $faker->word,
            //     'CREATEDBY' => $faker->name,
            //     'CREATEDON' => $faker->dateTimeThisYear(),
            //     'MESSAGE' => $faker->text(100),
            //     'IS_DELETE' => 'N'
            // ]);

            // Keputusan
            DB::table('LMSRETAIL_CMS_T_HISTORYMAINTENANCES')->insert([
                'INSERTIONORDERID' => $faker->unique()->numberBetween(1000, 9999999),
                'MAPID' => $MAPID,
                'ID' => $faker->unique()->numberBetween(1000, 9999999),
                'FIELD_NAME' => $faker->randomElement(['COLLATERAL_BINDING_TYPE', 'BINDING_DOCUMENT_TYPE', 'BINDING_COVER_NOTE_NUMBER', 'BINDING_COVER_NOTE_DATE', 'BINDING_COVER_NOTE_EXPIRY_DATE', 'NOTARY_NAME', 'DOCUMENT_CERTIFICATE_NUMBER_OF_BINDING', 'BINDING_DOCUMENT_DATE', 'BINDING_STATUS', 'BINDING_CURRENCY', 'BINDING_AMOUNT', 'COLLATERAL_CONTROL', 'BINDING_RANK', 'UPLOAD_NOTARY_DOCUMENT', 'PROCESSING_OR_BINDING_ORDER_DATE', 'NOTARY_PROCESS_SLA', 'ISSUE_CATEGORY', 'ISSUE_SUBCATEGORY', 'OWNERSHIP_EVIDENCE_COVER_NOTE_NUMBER', 'OWNERSHIP_EVIDENCE_COVER_NOTE_DATE', 'PROCESSING_OR_OWNERSHIP_EVIDENCE_ORDER_DATE', 'OWNERSHIP_EVIDENCE_COVER_NOTE_EXPIRY_DATE', 'NOTARY_NAME_FOR_OWNERSHIP_EVIDENCE', 'PRODUCT_ID', 'PERCENT_PENGIKATAN', 'VALUE_PENGIKATAN']),
                'FIELD_ID' => $faker->randomNumber(),
                'PREVIOUS_VALUE' => $faker->word,
                'UPDATED_VALUE' => $faker->word,
                'UPDATED_BY' => $faker->name,
                'DATETIME' => $faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d H:i:s'),
            ]);

            $endTime = microtime(true);
            $executionTime = $endTime - $startTime;
            $allTime += $executionTime;
            $allTime += 1;

            $this->command->info("Data {$no} Successed with execution time: {$executionTime} s. \033[36m[System Status: Optimal]\033[32m");
        }

        $this->command->info("------------------------------------------------------------------------------------------------");
        $this->command->info("🔒 Automation safely terminated for : {$allTime} s. \033[33mThank you for your trust in our intelligent systems!\033[32m 🚀");
    }

    private function getSubJenisAgunan(int $jenisAgunan = 1)
    {
        switch ($jenisAgunan) {
            case 1:
                return rand(35, 39);
            case 2:
                return 41;
            case 3;
                return 42;
            case 4:
                return 40;
            case 5:
            case 6:
            case 8:
            case 9:
            case 13:
                return rand(45, 47);
            case 10:
                return 44;
            case 12:
                return 43;
            default:
                return 1;
        }
    }

    private function generateCollateral(int $jenisAgunan = 1)
    {
        switch ($jenisAgunan) {
            case 1:
                return rand(35, 39);
            case 2:
                return 41;
            case 3;
                return 42;
            case 4:
                return 40;
            case 5:
            case 6:
            case 8:
            case 9:
            case 13:
                return rand(45, 47);
            case 10:
                return 44;
            case 12:
                return 43;
            default:
                return 1;
        }
    }
}
