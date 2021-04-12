create table TTPM(TTPM_ID number(27) primary key, Tsource varchar2(100), Mol varchar2(100), State varchar2(100), Rel varchar2(100), Drug varchar2(100), 
 Tmodel number(27), H number(27), Cases varchar2(100), Refe varchar2(1000))

insert into TTPM(TTPM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(1, '832', 'CYP3A4', 'active (high activity)', 
'toxicity decreased for','Irinotecan', 6, 1, '40', 'van der Bol JM, Clin Cancer Res 2010, 16:736-42');

insert into TTPM(TTPM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(2, 'Host', 'Glucocorticoid receptor', 'activated by', 
'toxicity unchanged for','Ipilimumab', 5, 0, '115', 'Weber J, Clin Cancer Res 2009, 15:5591-8');

insert into TTPM(TTPM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(3, 'Host', 'CD47', 'inhibited by', 
'toxicity decreased for','Radiotherapy', 2, 1, 'Ukn', 'Maxhimer JB, Sci Transl Med 2009, 1:3ra7');

update TTPM set Tsource = 'Host' where TTPM_ID = 1;
select * from TTPM

create table TTMM(TTMM_ID number(27) primary key, Tsource varchar2(100), Mol varchar2(100), State varchar2(100), Rel varchar2(100), Drug varchar2(100), 
Tmodel number(27), H number(27), Cases varchar2(100), Refe varchar2(1000))

create table TTDM(TTDM_ID number(27) primary key, Tsource varchar2(100), Mol varchar2(100), State varchar2(100), Rel varchar2(100), Drug varchar2(100), 
Tmodel number(27), H number(27), Cases varchar2(100), Refe varchar2(1000))

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(1, 'Host', 'MSH2', 'polymorphism rs2303428', 
'toxicity increased for','Temozolomide', 5, -1, '51', 'Boeckmann L, Pharmacogenet Genomics 2009, 19:760-9');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(2, 'PBMC', 'MGMT', 'expressed',
'toxicity decreased for','Temozolomide', 5, 1, '30', 'Middleton MR, Int J Cancer 2000, 88:469-73');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(3, 'Host', 'OCT2', 'polymorphism rs316019',
'toxicity decreased for','Cisplatin', 5, 1, '78', 'Filipski KK, Clin Pharmacol Ther 2009, 86:396-402');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(4, 'Host', 'GSTM1', 'deleted (null genotype)',
'toxicity decreased for','Cisplatin', 5, 1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(5, 'Host', 'GSTM3', 'genotype intron 6 AGG/AGG (polymorphism rs1799735)',
'toxicity decreased for','Cisplatin', 5, 1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(6, 'Host', 'p53', 'genotype 72 Pro/Pro (SNP rs1042522)',
'toxicity increased for','Cisplatin', 5, -1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(7, 'Host', 'XPD', 'genotype 312 Asp/Asn (SNP rs1799793)',
'toxicity increased for','Cisplatin', 5, -1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(8, 'Host', 'XRCC1', 'genotype 399 Arg/Arg (SNP rs25487)',
'toxicity increased for','Cisplatin', 5, -1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(9, 'Host', 'ERCC1', 'genotype 19007 T/C (SNP rs11615)',
'toxicity increased for','Cisplatin', 5, -1, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

insert into TTDM(TTDM_ID, Tsource, Mol, State, Rel, Drug, Tmodel, H, Cases, Refe) values(10, 'Host', 'CYP2E1', 'polymorphism rs2070676',
'toxicity unchanged for','Cisplatin', 5, 0, '104','Khrunin AV, Pharmacogenomics J 2010, 10:54-61');

select Drug from TTDM where Tsource='Host'
select Drug from TTDM where Tsource='PBMC'
select State from TTDM where Rel='toxicity increased for'
select State from TTDM where Rel='toxicity unchanged for'
select State from TTDM where Rel='toxicity decreased for'
select Mol from TTDM where Cases<100
