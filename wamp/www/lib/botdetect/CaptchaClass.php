<?php
 class Captcha { public function __construct($_0tthirxvwhnuox9goyj77wsfov) { $this->_lw7ebjlmi6q1drw4xpkdv = $_0tthirxvwhnuox9goyj77wsfov; $this->_Oq3w7fs1nex3zscid5ypn = "\114\102\x44\x5f\x56\103\111\x44\137{$_0tthirxvwhnuox9goyj77wsfov}"; $this->_l743z2bp4wwitzs6dudkaft5uy = "{$_0tthirxvwhnuox9goyj77wsfov}\x5f\x43\x61\x70\164\x63\150\141\111\x6d\x61\x67\145"; $this->_08zj64b6y4sxb8y8 = new LBD_CaptchaBase($_0tthirxvwhnuox9goyj77wsfov); $this->_Opywuuujbkorzb71y6i472ne4x = $this->_08zj64b6y4sxb8y8->CaptchaId; $this->_0jsvqb1h48fu823n = CaptchaConfiguration::GetSettings(); $this->_Ikdx6plfrd2vyfpmiqrov7ezqd = $this->_0jsvqb1h48fu823n->ImageTooltip; $this->_08tagf51qlrrg21x = $this->_0jsvqb1h48fu823n->ReloadEnabled; $this->_lppz38yxs2l3m8l5lkduj = $this->_0jsvqb1h48fu823n->ReloadTooltip; $this->_I65o2mc5k5clhx8ccfncr = $this->_0jsvqb1h48fu823n->ReloadIconUrl; $this->_iny1dx2pkst4gwuddtit3 = $this->_0jsvqb1h48fu823n->RemoteScriptEnabled; $this->Load(); } private $_0jsvqb1h48fu823n = null; private $_08zj64b6y4sxb8y8; public function get_CaptchaBase() { return $this->_08zj64b6y4sxb8y8; } private $_lw7ebjlmi6q1drw4xpkdv; private $_Opywuuujbkorzb71y6i472ne4x; private $_O63how9apgdrq3wc1jw2tgeqzl; public function get_UserInputId() { return $this->_O63how9apgdrq3wc1jw2tgeqzl; } public function set_UserInputId($_1lybplp9t5gjl1xz) { $this->_O63how9apgdrq3wc1jw2tgeqzl = "$_1lybplp9t5gjl1xz"; } private $_Oq3w7fs1nex3zscid5ypn; protected function get_HiddenFieldId() { return $this->_Oq3w7fs1nex3zscid5ypn; } private $_lop3inggphjfyewthlz8c1h9pe = -255; private $_Iwk9d2b89adolhlt = -255; public function get_TabIndex() { return $this->_lop3inggphjfyewthlz8c1h9pe; } public function set_TabIndex($_lcmz4wyau6z36t564nzrv) { $this->_lop3inggphjfyewthlz8c1h9pe = (int)($_lcmz4wyau6z36t564nzrv); } public function get_IsTabIndexSet() { $_O8ucrbhy2kgmnlx8 = false; if (-255 != $this->_lop3inggphjfyewthlz8c1h9pe) { $_O8ucrbhy2kgmnlx8 = true; } return $_O8ucrbhy2kgmnlx8; } private $_Ikdx6plfrd2vyfpmiqrov7ezqd; public function get_ImageTooltip() { return $this->_Ikdx6plfrd2vyfpmiqrov7ezqd; } public function set_ImageTooltip($_Ik4pqp8p99m92ra3vr6oodqi8o) { $this->_Ikdx6plfrd2vyfpmiqrov7ezqd = (string)$_Ik4pqp8p99m92ra3vr6oodqi8o; } private $_054fna4lfyq92055qbz28; public function get_SoundEnabled() { return $this->_054fna4lfyq92055qbz28; } public function set_SoundEnabled($_l5m5i6u3rlx6amce) { $this->_054fna4lfyq92055qbz28 = (bool)$_l5m5i6u3rlx6amce; } private $_o9x8mtemx5ej3yok; public function get_SoundTooltip() { return $this->_o9x8mtemx5ej3yok; } public function set_SoundTooltip($_oz5n94248pvf80jvjnwpus59no) { $this->_o9x8mtemx5ej3yok = (string)$_oz5n94248pvf80jvjnwpus59no; } private $_123q23zaaic4asnz69ma3ta3p5; public function get_SoundIconUrl() { return $this->_123q23zaaic4asnz69ma3ta3p5; } public function set_SoundIconUrl($_on1hkz5n6867713b) { $this->_123q23zaaic4asnz69ma3ta3p5 = (string)$_on1hkz5n6867713b; } private $_08tagf51qlrrg21x; public function get_ReloadEnabled() { return $this->_08tagf51qlrrg21x; } public function set_ReloadEnabled($_Ojylwz62txgkwslv) { $this->_08tagf51qlrrg21x = (bool)$_Ojylwz62txgkwslv; } private $_lppz38yxs2l3m8l5lkduj; public function get_ReloadTooltip() { return $this->_lppz38yxs2l3m8l5lkduj; } public function set_ReloadTooltip($_Og7rnbncwpaajia9) { $this->_lppz38yxs2l3m8l5lkduj = (string) $_Og7rnbncwpaajia9; } private $_I65o2mc5k5clhx8ccfncr; public function get_ReloadIconUrl() { return $this->_I65o2mc5k5clhx8ccfncr; } public function set_ReloadIconUrl($_1yc6x0zc9ycjicwt) { $this->_I65o2mc5k5clhx8ccfncr = (string) $_1yc6x0zc9ycjicwt; } private $_Irvi2p11sycy5kk64f2apvxx8k; public function get_HelpLinkEnabled() { } private $_15i5u9y0km81cn4idc5eyujauj; public function get_HelpLinkMode() {  } private $_0edy41fnol2fbwbh; public function get_HelpLinkUrl() { } private $_o70hnuwgvtvv56bh; public function get_HelpLinkText() { } private $_iny1dx2pkst4gwuddtit3; public function get_RemoteScriptEnabled() { return $this->_iny1dx2pkst4gwuddtit3; } public function get_IsSolved() { return LBD_Persistence_Load("\114\102\x44\x5f\x49\163\123\x6f\x6c\166\145\x64\x5f" . $this->_Opywuuujbkorzb71y6i472ne4x); } public function Reset() { LBD_Persistence_Clear("\114\x42\104\x5f\111\x73\123\157\154\x76\145\144\x5f" . $this->_Opywuuujbkorzb71y6i472ne4x); } private function suih0() {   } private $_0r01hr7afzgqhjj23x6b9 = LBD_Status::Unknown; public function get_UseSmallIcons() { $_I9yy5hm7rmt3q7e152c5pw01sb = false; switch ($this->_0r01hr7afzgqhjj23x6b9) { case LBD_Status::True: $_I9yy5hm7rmt3q7e152c5pw01sb = true; break; case LBD_Status::False: $_I9yy5hm7rmt3q7e152c5pw01sb = false; break; case LBD_Status::Unknown: $_I9yy5hm7rmt3q7e152c5pw01sb = ($this->ImageHeight < 50); break; } return $_I9yy5hm7rmt3q7e152c5pw01sb; } public function set_UseSmallIcons($_1muw5ats3qblvkawj3ri9) { if ($_1muw5ats3qblvkawj3ri9) { $this->_0r01hr7afzgqhjj23x6b9 = LBD_Status::True; } else { $this->_0r01hr7afzgqhjj23x6b9 = LBD_Status::False; } } private $_i5vwg9r2ffvk1wb9jhpmzdo5vt = LBD_Status::Unknown; public function get_UseHorizontalIcons() { $_O1hnxeeqxkm2x5cg = false; switch ($this->_i5vwg9r2ffvk1wb9jhpmzdo5vt) { case LBD_Status::True: $_O1hnxeeqxkm2x5cg = true; break; case LBD_Status::False: $_O1hnxeeqxkm2x5cg = false; break; case LBD_Status::Unknown: $_O1hnxeeqxkm2x5cg = ($this->ImageHeight < 40); break; } return $_O1hnxeeqxkm2x5cg; } public function set_UseHorizontalIcons($_i4tdiy4b48j2kgau5ak0x) { if ($_i4tdiy4b48j2kgau5ak0x) { $this->_i5vwg9r2ffvk1wb9jhpmzdo5vt = LBD_Status::True; } else { $this->_i5vwg9r2ffvk1wb9jhpmzdo5vt = LBD_Status::False; } } const IconSize = 22; const SmallIconSize = 17; const IconSpacing = 2; public function get_TotalWidth() { return $this->ImageWidth + 6 + $this->get_IconsDivWidth(); } public function get_TotalHeight() { return $this->ImageHeight; } public function get_IconWidth() { if ($this->u497r()) { if ($this->UseSmallIcons) { return 17; } else { return 22; } } else { return 22; } } public function get_IconSpaing() { return 2; } public function get_IconsDivWidth() { if ($this->UseHorizontalIcons) { return 2 * $this->get_IconWidth() + 4 * $this->get_IconSpaing(); } else { return $this->get_IconWidth() + $this->get_IconSpaing(); } } private function u497r() { return (0 == strcmp(basename($this->_0jsvqb1h48fu823n->SoundIconUrl), "\x6c\142\x64\x5f\x73\157\x75\156\144\137\x69\143\x6f\156\x2e\x67\151\146")) && 0 == strcmp(basename($this->_0jsvqb1h48fu823n->ReloadIconUrl), "\x6c\x62\x64\x5f\162\x65\x6c\157\141\x64\x5f\x69\x63\x6f\156\56\x67\151\146"); } private function byw3b() { if ($this->UseSmallIcons) { $this->_I65o2mc5k5clhx8ccfncr = CaptchaUrls::SmallReloadIconUrl(); $this->_123q23zaaic4asnz69ma3ta3p5 = CaptchaUrls::SmallSoundIconUrl(); } if (!$this->CaptchaSoundAvailable) { if ($this->UseSmallIcons) { $this->_123q23zaaic4asnz69ma3ta3p5 = CaptchaUrls::DisabledSmallSoundIconUrl(); } else { $this->_123q23zaaic4asnz69ma3ta3p5 = CaptchaUrls::DisabledSoundIconUrl(); } $this->_o9x8mtemx5ej3yok = "\74\x65\155\76\x43\141\x70\164\143\150\141\x20\163\x6f\165\156\x64\40\x69\x73\40\x65\156\x61\x62\x6c\x65\144\x2c\40\142\165\164\x20\164\150\145\40\x70\162\157\x6e\165\x6e\x63\151\141\x74\151\x6f\156\x20\x73\x6f\165\x6e\144\x20\x70\x61\143\x6b\x61\147\145\40\x72\145\x71\165\x69\x72\145\x64\x20\x66\x6f\x72\x20\164\150\x65\40\x63\165\x72\162\x65\156\x74\40\x6c\157\143\x61\154\x65\x20\x63\141\x6e\40\156\157\164\40\x62\x65\40\x66\x6f\x75\x6e\144\56\x3c\57\x65\155\x3e\40\n\74\x65\155\76\x54\x6f\40\145\156\x61\142\x6c\x65\40\x43\141\x70\164\143\x68\141\x20\163\157\165\x6e\x64\x20\x66\x6f\162\x20\164\150\151\x73\40\154\157\x63\x61\154\x65\54\x20\160\154\x65\x61\x73\145\x20\144\145\x70\x6c\x6f\x79\x20\164\x68\145\40\141\160\x70\x72\x6f\160\x72\151\x61\164\145\x20\x73\157\x75\x6e\x64\40\160\x61\143\x6b\x61\147\145\40\x66\x72\157\155\40\x74\x68\x65\x20\74\x63\157\x64\145\x3e\150\164\164\160\x3a\57\57\143\x61\x70\x74\143\150\x61\56\x63\x6f\155\x2f\x63\x61\x70\x74\x63\x68\141\x2d\154\x6f\x63\x61\x6c\151\172\141\164\x69\157\x6e\163\56\150\164\155\x6c\74\57\x63\157\144\x65\76\40\160\x61\x67\145\40\x74\x6f\40\x74\150\145\40\74\143\x6f\144\x65\x3e\154\x69\142\x2f\x62\157\x74\x64\x65\x74\x65\x63\164\x2f\x52\145\x73\157\165\162\x63\145\x73\x2f\x53\157\165\x6e\144\57\x3c\57\x63\157\144\145\x3e\x20\146\x6f\x6c\144\x65\162\x20\151\156\x20\x74\150\x65\x20\x42\157\x74\104\145\164\x65\x63\164\40\x43\x61\x70\164\143\x68\x61\40\x6c\151\x62\162\x61\162\x79\40\x79\157\165\40\x61\162\x65\x20\x69\x6e\143\x6c\x75\x64\151\156\x67\x20\x69\156\x20\171\157\165\162\x20\x70\141\x67\x65\56\40\x46\x6f\x72\x20\x65\170\x61\155\160\154\x65\54\x20\x75\x73\145\x20\74\x63\x6f\144\x65\x3e\x50\162\157\156\x75\x6e\x63\x69\141\x74\x69\x6f\x6e\x5f\105\x6e\x67\x6c\151\x73\x68\x5f\107\x42\56\x62\144\x73\160\x3c\57\143\x6f\144\145\x3e\x20\146\157\x72\40\102\x72\x69\164\151\x73\150\x20\x45\x6e\147\x6c\151\163\x68\x20\103\x61\160\x74\143\x68\141\x20\x73\x6f\x75\x6e\x64\x73\56\74\57\145\x6d\76\40\n\74\x65\x6d\x3e\124\157\40\144\x69\163\141\x62\154\145\40\x74\x68\151\163\40\x77\141\x72\156\x69\156\147\x20\141\x6e\x64\x20\x72\x65\155\157\x76\x65\x20\164\x68\145\40\x73\x6f\165\156\x64\40\151\143\x6f\156\40\x66\157\x72\40\164\150\145\40\x63\x75\162\x72\145\x6e\164\40\103\x61\160\x74\143\150\x61\40\154\157\143\x61\154\145\x2c\40\163\x65\x74\40\74\143\157\x64\145\76\$\x43\x61\x70\164\143\150\x61\x43\x6f\x6e\x66\x69\147\55\x3e\x57\141\x72\156\101\142\157\x75\164\x4d\x69\x73\163\151\156\x67\123\157\x75\x6e\144\x50\x61\143\x6b\141\147\145\163\74\57\x63\157\x64\x65\x3e\40\x74\x6f\40\74\x63\x6f\144\x65\x3e\x66\x61\x6c\x73\145\x3c\57\143\x6f\144\x65\76\40\151\x6e\40\164\150\145\x20\x3c\143\157\144\x65\x3e\154\151\x62\x2f\142\157\164\144\145\164\x65\143\x74\x2f\103\141\x70\164\x63\150\141\103\x6f\156\146\151\x67\56\160\x68\x70\x3c\57\143\x6f\144\x65\76\40\x66\151\x6c\145\56\x20\124\157\40\162\145\x6d\157\166\145\40\x74\150\x65\x20\163\x6f\165\156\x64\x20\x69\143\157\x6e\40\x66\x6f\x72\40\x61\x6c\x6c\40\x6c\x6f\143\x61\154\x65\163\x2c\x20\x73\x69\155\160\154\171\40\x73\145\x74\40\x3c\143\157\144\x65\76\$\103\x61\160\164\143\150\x61\103\157\x6e\146\x69\147\x2d\x3e\123\x6f\x75\156\x64\105\x6e\x61\x62\154\145\x64\x20\x3d\x20\x66\x61\x6c\163\x65\73\74\57\x63\157\144\145\x3e\x2e\x3c\57\x65\155\x3e"; } } public function get_CaptchaImageUrl() { return CaptchaUrls::ImageUrl($this); } public function get_CaptchaSoundUrl() { return CaptchaUrls::SoundUrl($this); } public function get_ScriptIncludeUrl() { return CaptchaUrls::ScriptIncludeUrl(); } private $_l743z2bp4wwitzs6dudkaft5uy; public function get_ImageClientId() { return $this->_l743z2bp4wwitzs6dudkaft5uy; } public function get_RenderIcons() { return ($this->_054fna4lfyq92055qbz28 || $this->_08tagf51qlrrg21x); } protected function Load() { $this->_08zj64b6y4sxb8y8->Load(); } protected function Save() { $this->_08zj64b6y4sxb8y8->Save(); } public function Validate($_1qquoxc6kfs20ork6h4c6 = null, $_Idj833s7p1rmhgx2 = null) { if (!isset($_1qquoxc6kfs20ork6h4c6) && array_key_exists($this->_O63how9apgdrq3wc1jw2tgeqzl, $_REQUEST)) { $_1qquoxc6kfs20ork6h4c6 = $_REQUEST[$this->_O63how9apgdrq3wc1jw2tgeqzl]; $_1qquoxc6kfs20ork6h4c6 = trim($_1qquoxc6kfs20ork6h4c6); } if (!isset($_Idj833s7p1rmhgx2) && array_key_exists($this->_Oq3w7fs1nex3zscid5ypn, $_REQUEST)) { $_Idj833s7p1rmhgx2 = $_REQUEST[$this->_Oq3w7fs1nex3zscid5ypn]; } if (!isset($_1qquoxc6kfs20ork6h4c6) || !(isset($_Idj833s7p1rmhgx2))) { return false; } $_1ufq62347afxnh5pixbvb = $this->_08zj64b6y4sxb8y8->Validate($_1qquoxc6kfs20ork6h4c6, $_Idj833s7p1rmhgx2, LBD_ValidationAttemptOrigin::Server); if ($_1ufq62347afxnh5pixbvb) { LBD_Persistence_Save("\114\x42\x44\137\x49\x73\123\157\154\166\145\144\137" . $this->_Opywuuujbkorzb71y6i472ne4x, true); } else { LBD_Persistence_Clear("\114\x42\x44\137\111\x73\123\157\154\x76\x65\x64\137" . $this->_Opywuuujbkorzb71y6i472ne4x); } return $_1ufq62347afxnh5pixbvb; } public function AjaxValidate($_Okt2en41ihfwu8v97gykr = null, $_16wrrlrk0yxgkookyl10uavq11 = null) { if (!isset($_Okt2en41ihfwu8v97gykr) || !(isset($_16wrrlrk0yxgkookyl10uavq11))) { return false; } $_Iini54g2imi9ve41 = $this->_08zj64b6y4sxb8y8->Validate($_Okt2en41ihfwu8v97gykr, $_16wrrlrk0yxgkookyl10uavq11, LBD_ValidationAttemptOrigin::Client); return $_Iini54g2imi9ve41; } public function get_SoundFilename() { if (SoundFormat::WavPcm16bit8kHzMono == $this->SoundFormat) { return "\x63\141\x70\164\x63\150\x61\137{$this->InstanceId}\56\167\141\x76"; } else if (SoundFormat::WavPcm8bit8kHzMono == $this->SoundFormat) { return "\x63\x61\160\164\143\150\x61\x5f{$this->InstanceId}\x2e\x77\141\166"; } } public function get_CaptchaSoundAvailable() { return $this->_08zj64b6y4sxb8y8->IsLocalizedPronunciationAvailable; } public function Html() { $this->v837m(); $_O4andfe4r1lbajg71jtpxp6pq3 = "\r\n\x20\40\74\144\x69\x76\40\x63\154\x61\163\163\x3d\"\x4c\102\x44\137\x43\141\x70\164\143\150\x61\x44\151\x76\"\40\x69\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\137\x43\141\x70\x74\x63\x68\x61\x44\151\166\"\x20\163\164\171\x6c\x65\75\"\x77\x69\144\164\150\72{$this->TotalWidth}\160\x78\x3b\40\x68\x65\x69\x67\x68\164\72{$this->TotalHeight}\x70\170\73\"\x3e\74\41\x2d\55\r\n"; $_O4andfe4r1lbajg71jtpxp6pq3 = $this->wy7sb($_O4andfe4r1lbajg71jtpxp6pq3); if ($this->RenderIcons) { $_O4andfe4r1lbajg71jtpxp6pq3 .= "\x20\55\x2d\76\x3c\57\144\151\166\76\x3c\41\x2d\55\r\n"; } else { $_O4andfe4r1lbajg71jtpxp6pq3 .= "\40\55\55\x3e\x3c\x2f\x64\151\166\x3e\r\n"; } $_O4andfe4r1lbajg71jtpxp6pq3 = $this->m5ash($_O4andfe4r1lbajg71jtpxp6pq3); $_O4andfe4r1lbajg71jtpxp6pq3 = $this->o7wh9($_O4andfe4r1lbajg71jtpxp6pq3); $_O4andfe4r1lbajg71jtpxp6pq3 = $this->k957p($_O4andfe4r1lbajg71jtpxp6pq3); $_O4andfe4r1lbajg71jtpxp6pq3 .= "\x20\40\74\x2f\144\151\x76\x3e\r\n"; return $_O4andfe4r1lbajg71jtpxp6pq3; } private function v837m() { $this->Save(); if ($this->u497r()) { $this->byw3b(); } $this->suih0(); } private function wy7sb($_iufdscc0xt9zeu27frr6ukyjw2) { $_iufdscc0xt9zeu27frr6ukyjw2 .= "\40\55\x2d\x3e\x3c\x64\151\x76\40\x63\x6c\141\x73\163\75\"\114\102\x44\137\x43\141\160\x74\143\150\x61\x49\155\141\147\x65\x44\151\x76\"\40\151\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\103\x61\x70\x74\x63\x68\141\111\x6d\x61\x67\145\104\151\x76\"\40\x73\164\x79\x6c\x65\75\"\167\x69\x64\164\150\x3a{$this->ImageWidth}\x70\x78\40\x21\x69\155\x70\x6f\162\164\x61\156\164\73\x20\150\145\151\147\x68\x74\72{$this->ImageHeight}\160\x78\40\x21\x69\155\160\x6f\162\x74\x61\156\x74\73\"\x3e\x3c\x21\55\x2d\r\n"; $this->_Iwk9d2b89adolhlt = $this->_lop3inggphjfyewthlz8c1h9pe; if (!$this->_Irvi2p11sycy5kk64f2apvxx8k) { $_iufdscc0xt9zeu27frr6ukyjw2 = $this->umn74($_iufdscc0xt9zeu27frr6ukyjw2); } else { switch ($this->_15i5u9y0km81cn4idc5eyujauj) { case HelpLinkMode::Image: $_iufdscc0xt9zeu27frr6ukyjw2 = $this->dj0d1($_iufdscc0xt9zeu27frr6ukyjw2); break; case HelpLinkMode::Text: $_iufdscc0xt9zeu27frr6ukyjw2 = $this->jwvxp($_iufdscc0xt9zeu27frr6ukyjw2); break; } } return $_iufdscc0xt9zeu27frr6ukyjw2; } private function umn74($_iygaa2cybd5zdewd376pe) { $_iygaa2cybd5zdewd376pe .= "\40\40\x20\55\55\x3e\74\151\155\x67\40\x63\x6c\x61\163\x73\75\"\x4c\102\104\137\x43\x61\x70\164\x63\x68\141\111\x6d\x61\x67\x65\"\40\151\x64\75\"{$this->_l743z2bp4wwitzs6dudkaft5uy}\"\x20\x73\x72\x63\x3d\"{$this->CaptchaImageUrl}\"\x20\x61\x6c\x74\75\"{$this->_Ikdx6plfrd2vyfpmiqrov7ezqd}\"\40\x2f\76\74\41\55\x2d\r\n"; return $_iygaa2cybd5zdewd376pe; } private function dj0d1($_Oarnr34zfv3e760ffq72yycmnb) { if ($this->IsTabIndexSet) { $_Oarnr34zfv3e760ffq72yycmnb .= "\x20\x20\40\55\x2d\x3e\74\141\x20\164\x61\162\147\145\x74\x3d\"\x5f\x62\x6c\x61\156\x6b\"\x20\x68\162\x65\x66\x3d\"{$this->_0edy41fnol2fbwbh}\"\40\164\151\164\154\x65\x3d\"{$this->_o70hnuwgvtvv56bh}\"\x20\164\141\142\x69\x6e\x64\145\170\75\"{$this->_Iwk9d2b89adolhlt}\"\40\x6f\156\x63\154\151\x63\153\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x2e\117\156\110\x65\x6c\160\114\151\x6e\153\103\154\151\143\153\50\51\73\40\x72\x65\x74\x75\x72\156\40{$this->_lw7ebjlmi6q1drw4xpkdv}\56\x46\157\x6c\x6c\157\167\110\x65\154\160\x4c\x69\x6e\x6b\x3b\"\76\x3c\x69\155\147\x20\x63\154\x61\x73\163\x3d\"\114\102\104\x5f\103\141\160\164\x63\x68\141\x49\x6d\x61\x67\145\"\40\151\144\75\"{$this->_l743z2bp4wwitzs6dudkaft5uy}\"\x20\x73\x72\x63\x3d\"{$this->CaptchaImageUrl}\"\40\x61\x6c\164\75\"{$this->_Ikdx6plfrd2vyfpmiqrov7ezqd}\"\x20\x2f\76\x3c\57\141\76\x3c\x21\55\55\r\n"; if (-1 != $this->_Iwk9d2b89adolhlt) { $this->_Iwk9d2b89adolhlt++; } } else { $_Oarnr34zfv3e760ffq72yycmnb .= "\40\40\x20\55\55\76\x3c\141\40\x74\141\x72\x67\x65\x74\75\"\x5f\142\154\x61\x6e\x6b\"\40\150\162\145\x66\75\"{$this->_0edy41fnol2fbwbh}\"\40\164\151\x74\x6c\145\x3d\"{$this->_o70hnuwgvtvv56bh}\"\x20\157\156\x63\x6c\151\x63\x6b\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\56\x4f\156\x48\x65\x6c\160\x4c\151\x6e\x6b\x43\x6c\x69\143\x6b\50\51\x3b\x20\x72\145\164\165\162\156\x20{$this->_lw7ebjlmi6q1drw4xpkdv}\56\106\157\x6c\x6c\x6f\x77\x48\x65\154\160\x4c\x69\156\x6b\x3b\"\x3e\74\x69\155\147\x20\x63\x6c\x61\x73\x73\75\"\x4c\102\x44\137\103\141\160\164\x63\150\141\x49\155\141\x67\x65\"\x20\151\144\x3d\"{$this->_l743z2bp4wwitzs6dudkaft5uy}\"\40\163\x72\x63\75\"{$this->CaptchaImageUrl}\"\x20\141\x6c\x74\x3d\"{$this->_Ikdx6plfrd2vyfpmiqrov7ezqd}\"\40\57\76\74\57\x61\76\x3c\x21\55\55\r\n"; } return $_Oarnr34zfv3e760ffq72yycmnb; } private function jwvxp($_0q5zaxqmsilkotk71ya0q) { $_1p61nftj9xsibzqc = $this->TotalHeight - $this->mlopb(); $_0q5zaxqmsilkotk71ya0q .= "\x20\40\x20\55\x2d\x3e\74\144\151\x76\40\x63\x6c\141\x73\163\x3d\"\114\102\x44\137\x43\141\x70\164\x63\x68\141\111\x6d\141\x67\145\x44\151\x76\"\40\x73\164\171\154\145\75\"\167\x69\x64\164\x68\x3a{$this->ImageWidth}\160\x78\73\40\150\x65\x69\147\x68\164\x3a{$_1p61nftj9xsibzqc}\x70\170\x3b\"\76\74\x69\x6d\147\40\143\x6c\141\x73\x73\75\"\114\102\104\x5f\x43\141\160\x74\x63\x68\141\x49\155\141\x67\x65\"\x20\x69\144\x3d\"{$this->_l743z2bp4wwitzs6dudkaft5uy}\"\40\163\x72\143\75\"{$this->CaptchaImageUrl}\"\40\x61\x6c\x74\75\"{$this->_Ikdx6plfrd2vyfpmiqrov7ezqd}\"\x20\x2f\x3e\74\57\144\151\166\76\74\41\x2d\55\r\n"; $_0qmpxgnsxncsun2y1ar48 = $this->mlopb(); $_I7sj7l85isgjhi79pqine = $_0qmpxgnsxncsun2y1ar48 - 1; if ($this->IsTabIndexSet) { $_0q5zaxqmsilkotk71ya0q .= "\40\x20\x20\55\x2d\x3e\74\141\40\x68\x72\145\146\x3d\"{$this->_0edy41fnol2fbwbh}\"\x20\164\x61\x72\x67\145\164\x3d\"\x5f\142\x6c\x61\156\x6b\"\x20\x74\141\x62\151\x6e\144\x65\x78\x3d\"{$this->_Iwk9d2b89adolhlt}\"\x20\164\151\x74\154\x65\75\"{$this->_o70hnuwgvtvv56bh}\"\40\163\164\171\154\x65\75\"\x64\x69\x73\160\x6c\x61\171\72\x20\x62\154\157\143\x6b\x20\x21\x69\x6d\160\x6f\x72\x74\141\x6e\164\73\x20\150\x65\x69\x67\150\164\x3a\40{$_0qmpxgnsxncsun2y1ar48}\160\170\40\x21\151\155\x70\157\x72\x74\x61\x6e\x74\73\x20\155\x61\x72\147\151\x6e\x3a\40\x30\x20\x21\151\x6d\x70\157\162\x74\x61\x6e\164\73\x20\x70\141\x64\144\x69\x6e\147\x3a\x20\60\x20\x21\151\155\x70\x6f\162\164\x61\x6e\164\73\40\x66\157\156\164\55\163\151\x7a\x65\72\x20{$_I7sj7l85isgjhi79pqine}\x70\170\x20\41\x69\x6d\x70\157\162\164\141\x6e\164\x3b\x20\154\x69\x6e\x65\55\150\145\x69\x67\150\164\72\x20{$_0qmpxgnsxncsun2y1ar48}\x70\x78\40\41\x69\155\x70\x6f\162\x74\141\156\x74\73\40\166\x69\x73\151\142\x69\154\151\164\171\72\x20\166\151\x73\x69\x62\x6c\145\x20\41\151\x6d\x70\x6f\x72\x74\141\156\x74\x3b\40\x66\157\x6e\164\55\146\141\155\x69\154\x79\x3a\40\126\145\162\x64\141\156\141\x2c\40\104\145\x6a\x61\126\165\x20\123\141\156\163\x2c\x20\x42\x69\x74\163\x74\162\145\141\155\40\x56\145\162\x61\x20\123\141\x6e\163\x2c\40\126\x65\162\144\x61\x6e\x61\40\x52\x65\146\x2c\40\163\141\156\163\55\163\x65\x72\x69\x66\40\41\151\x6d\x70\x6f\162\x74\x61\x6e\x74\x3b\x20\x76\x65\x72\x74\151\x63\x61\x6c\55\141\154\x69\147\x6e\x3a\40\x6d\151\x64\x64\154\145\x20\41\151\x6d\x70\157\x72\x74\x61\156\x74\73\x20\164\x65\x78\x74\x2d\141\x6c\151\x67\156\72\40\143\x65\x6e\164\x65\x72\x20\x21\151\155\x70\157\x72\164\141\156\164\73\x20\x74\x65\x78\164\55\x64\145\x63\x6f\162\141\164\x69\157\156\x3a\x20\x6e\157\156\145\x20\41\x69\155\x70\157\162\x74\x61\x6e\x74\73\x20\x62\141\x63\153\x67\x72\157\165\156\x64\55\x63\x6f\154\x6f\162\x3a\40\43\146\x38\146\x38\146\70\x20\x21\x69\x6d\160\x6f\162\x74\141\156\x74\x3b\x20\143\x6f\x6c\157\x72\72\40\43\x36\60\x36\60\x36\60\x20\41\x69\x6d\x70\x6f\x72\164\x61\156\x74\73\"\76{$this->_o70hnuwgvtvv56bh}\x3c\57\x61\x3e\x3c\x21\55\55\r\n"; if (-1 != $this->_Iwk9d2b89adolhlt) { $this->_Iwk9d2b89adolhlt++; } } else { $_0q5zaxqmsilkotk71ya0q .= "\40\x20\x20\55\x2d\76\x3c\x61\40\x68\162\145\146\x3d\"{$this->_0edy41fnol2fbwbh}\"\x20\x74\x61\162\147\145\x74\x3d\"\x5f\142\x6c\x61\x6e\153\"\40\164\151\164\154\145\75\"{$this->_o70hnuwgvtvv56bh}\"\40\x73\x74\x79\154\x65\x3d\"\x64\151\163\160\x6c\x61\x79\x3a\40\x62\154\x6f\143\153\x20\41\x69\155\x70\x6f\x72\164\x61\x6e\164\x3b\x20\x68\145\x69\x67\150\x74\72\40{$_0qmpxgnsxncsun2y1ar48}\160\170\x20\x21\151\x6d\x70\x6f\162\x74\141\x6e\164\x3b\40\x6d\141\x72\x67\151\156\72\40\60\x20\x21\151\x6d\x70\157\162\x74\141\x6e\x74\73\x20\x70\141\x64\144\151\156\x67\72\40\60\40\x21\151\155\x70\x6f\162\x74\x61\156\164\x3b\40\146\157\156\x74\55\x73\x69\x7a\x65\x3a\40{$_I7sj7l85isgjhi79pqine}\160\x78\40\41\151\x6d\160\157\x72\164\141\156\164\73\40\x6c\151\x6e\x65\x2d\x68\x65\151\x67\x68\164\x3a\x20{$_I7sj7l85isgjhi79pqine}\160\170\40\41\x69\155\160\157\x72\164\141\x6e\x74\73\40\166\x69\163\x69\142\x69\x6c\151\x74\x79\x3a\x20\166\151\163\x69\142\154\x65\x20\x21\151\x6d\160\x6f\162\164\141\x6e\x74\73\x20\x66\x6f\156\164\x2d\146\x61\x6d\x69\x6c\171\72\x20\x56\145\x72\144\141\156\x61\x2c\40\104\x65\152\x61\126\x75\40\x53\141\x6e\163\54\x20\102\151\x74\163\164\162\145\141\155\40\126\x65\162\141\x20\x53\141\x6e\163\54\40\126\x65\162\x64\141\156\141\x20\122\x65\146\x2c\x20\x73\141\x6e\163\55\x73\145\x72\x69\146\40\x21\151\155\160\x6f\162\x74\141\x6e\x74\x3b\40\166\x65\162\164\151\x63\141\x6c\55\141\154\151\x67\x6e\72\x20\155\x69\144\x64\154\x65\40\41\x69\155\x70\157\x72\x74\141\x6e\164\73\x20\164\145\170\x74\55\x61\x6c\151\147\156\x3a\40\x63\x65\156\164\x65\162\x20\x21\x69\x6d\160\157\162\164\x61\x6e\x74\73\x20\164\145\170\x74\55\x64\x65\143\157\x72\141\164\151\157\x6e\x3a\x20\156\157\156\x65\40\41\151\155\160\x6f\162\x74\x61\x6e\164\73\40\x62\x61\143\x6b\x67\x72\x6f\165\156\x64\x2d\x63\x6f\154\x6f\162\72\40\x23\x66\x38\146\70\146\x38\x20\41\x69\155\x70\x6f\x72\164\141\x6e\164\73\40\x63\157\x6c\x6f\162\x3a\40\43\x36\x30\66\x30\x36\x30\40\x21\151\155\x70\x6f\162\x74\141\156\x74\x3b\"\x3e{$this->_o70hnuwgvtvv56bh}\74\x2f\x61\76\x3c\x21\55\55\r\n"; } return $_0q5zaxqmsilkotk71ya0q; } private function m5ash($_Immxyt9aqv6rsq43) { if ($this->RenderIcons) { $_Immxyt9aqv6rsq43 .= "\40\55\x2d\76\74\144\151\x76\40\x63\154\141\x73\x73\x3d\"\x4c\102\104\x5f\103\141\160\x74\x63\150\141\x49\x63\x6f\x6e\x73\x44\x69\x76\"\40\151\144\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\x43\141\160\x74\143\x68\141\x49\x63\x6f\156\163\x44\x69\166\"\40\163\164\171\154\145\75\"\x77\x69\x64\x74\x68\x3a\40{$this->IconsDivWidth}\160\x78\x20\x21\x69\x6d\160\157\162\x74\x61\156\164\x3b\"\x3e\74\x21\x2d\x2d\r\n"; if ($this->ReloadEnabled) { if ($this->IsTabIndexSet) { $_Immxyt9aqv6rsq43 .= "\40\x20\40\55\x2d\76\x3c\141\x20\x63\x6c\x61\163\x73\75\"\114\x42\104\137\x52\x65\154\157\x61\x64\x4c\x69\x6e\x6b\"\40\x69\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\122\145\x6c\157\x61\144\x4c\151\156\x6b\"\x20\150\x72\x65\x66\75\"\43\"\x20\164\141\x62\151\x6e\x64\145\170\75\"{$this->_Iwk9d2b89adolhlt}\"\x20\157\156\143\154\x69\x63\x6b\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x2e\122\x65\154\x6f\x61\x64\x49\x6d\x61\147\145\x28\x29\73\x20\x74\150\151\163\56\142\154\165\x72\50\x29\73\x20\162\145\x74\165\162\156\x20\x66\x61\x6c\x73\145\x3b\"\40\164\151\164\x6c\145\x3d\"{$this->_lppz38yxs2l3m8l5lkduj}\"\76\x3c\x69\x6d\x67\40\x63\154\141\163\x73\75\"\114\102\104\137\122\x65\154\157\141\x64\x49\x63\157\156\"\x20\151\x64\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\x52\145\154\157\141\144\x49\143\x6f\156\"\40\163\x72\x63\x3d\"{$this->_I65o2mc5k5clhx8ccfncr}\"\40\141\x6c\164\x3d\"{$this->_lppz38yxs2l3m8l5lkduj}\"\40\x2f\76\x3c\57\141\76\x3c\x21\55\55\r\n"; if (-1 != $this->_Iwk9d2b89adolhlt) { $this->_Iwk9d2b89adolhlt++; } } else { $_Immxyt9aqv6rsq43 .= "\40\x20\x20\x2d\x2d\x3e\x3c\x61\40\143\154\141\x73\163\75\"\114\102\104\x5f\x52\x65\154\157\x61\144\114\x69\x6e\153\"\40\x69\144\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\122\x65\154\157\x61\144\x4c\151\156\x6b\"\x20\x68\x72\x65\146\75\"\x23\"\x20\157\x6e\x63\154\x69\143\x6b\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x2e\x52\145\154\x6f\141\x64\111\155\x61\x67\145\50\51\x3b\40\x74\150\151\x73\56\x62\x6c\x75\162\x28\x29\73\x20\162\x65\164\165\162\x6e\x20\146\x61\154\163\145\x3b\"\40\x74\151\x74\154\x65\x3d\"{$this->_lppz38yxs2l3m8l5lkduj}\"\76\x3c\x69\155\x67\40\143\x6c\141\163\x73\75\"\x4c\102\104\x5f\x52\145\154\x6f\141\144\x49\x63\157\x6e\"\x20\x69\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\122\x65\154\x6f\x61\144\x49\143\157\156\"\x20\163\162\x63\x3d\"{$this->_I65o2mc5k5clhx8ccfncr}\"\40\x61\154\x74\x3d\"{$this->_lppz38yxs2l3m8l5lkduj}\"\40\x2f\x3e\74\57\141\76\74\x21\x2d\x2d\r\n"; } } $_olh8hid87ovpbw62d19nz = $this->CaptchaSoundUrl; if ($this->SoundEnabled) { if ($this->CaptchaSoundAvailable) { if ($this->IsTabIndexSet) { $_Immxyt9aqv6rsq43 .= "\x20\x20\x20\55\x2d\x3e\74\x61\x20\x63\x6c\141\163\163\75\"\x4c\102\104\x5f\123\x6f\165\156\144\114\x69\156\153\"\40\x69\144\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\x53\157\x75\156\144\114\x69\x6e\153\"\x20\x68\162\145\x66\75\"{$_olh8hid87ovpbw62d19nz}\"\40\x74\141\142\151\156\x64\x65\x78\75\"{$this->_Iwk9d2b89adolhlt}\"\40\157\156\143\x6c\151\143\153\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\56\120\154\141\x79\x53\157\x75\x6e\x64\50\51\x3b\x20\x74\x68\151\163\x2e\142\154\x75\162\50\x29\73\x20\162\x65\x74\x75\162\x6e\x20\146\141\x6c\163\145\x3b\"\40\x74\x69\x74\x6c\x65\x3d\"{$this->_o9x8mtemx5ej3yok}\"\76\74\x69\x6d\x67\40\x63\154\141\163\x73\75\"\114\102\x44\137\x53\157\x75\x6e\144\111\x63\x6f\x6e\"\x20\x69\x64\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\137\123\x6f\x75\x6e\x64\x49\x63\x6f\156\"\40\x73\x72\x63\x3d\"{$this->_123q23zaaic4asnz69ma3ta3p5}\"\x20\141\x6c\164\75\"{$this->_o9x8mtemx5ej3yok}\"\x20\57\76\x3c\57\x61\x3e\74\x21\55\x2d\r\n"; } else { $_Immxyt9aqv6rsq43 .= "\40\x20\x20\55\55\76\74\141\40\143\x6c\x61\x73\163\75\"\x4c\102\104\137\x53\157\x75\x6e\144\114\x69\x6e\153\"\x20\x69\144\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\123\157\165\x6e\144\114\x69\x6e\153\"\40\x68\162\x65\146\75\"{$_olh8hid87ovpbw62d19nz}\"\40\157\x6e\143\x6c\x69\x63\x6b\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\56\x50\x6c\x61\x79\123\x6f\x75\156\144\50\x29\73\x20\x74\150\151\x73\x2e\x62\154\x75\162\50\x29\73\40\x72\x65\x74\165\162\156\40\x66\x61\154\x73\145\73\"\x20\164\151\164\154\x65\x3d\"{$this->_o9x8mtemx5ej3yok}\"\x3e\74\x69\155\x67\x20\x63\x6c\x61\x73\163\x3d\"\114\x42\x44\137\x53\x6f\x75\x6e\144\111\143\x6f\x6e\"\x20\151\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\x53\157\x75\x6e\144\111\143\x6f\x6e\"\40\x73\x72\143\75\"{$this->_123q23zaaic4asnz69ma3ta3p5}\"\40\141\x6c\164\75\"{$this->_o9x8mtemx5ej3yok}\"\40\x2f\76\74\57\141\76\x3c\x21\55\55\r\n"; } } else { $_Immxyt9aqv6rsq43 .= "\x20\40\x20\x2d\x2d\x3e\74\141\x20\164\141\162\x67\145\164\75\"\x5f\142\154\141\156\153\"\40\x63\x6c\x61\163\x73\75\"\114\x42\x44\x5f\104\x69\163\141\x62\154\x65\x64\114\x69\156\x6b\"\x20\151\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\123\x6f\x75\x6e\x64\x4c\x69\x6e\x6b\"\40\x68\x72\145\146\75\"\x23\"\x20\x74\141\142\151\x6e\x64\x65\170\x3d\"{$this->_Iwk9d2b89adolhlt}\"\x20\x6f\x6e\143\x6c\x69\x63\x6b\x3d\"\164\150\151\x73\x2e\142\x6c\165\162\50\x29\x3b\"\x3e\74\x69\x6d\147\x20\x63\154\141\163\x73\75\"\114\x42\x44\x5f\x53\x6f\x75\156\x64\x49\x63\x6f\x6e\"\40\151\x64\x3d\"{$this->_lw7ebjlmi6q1drw4xpkdv}\137\123\x6f\165\x6e\x64\111\143\157\156\"\x20\163\162\143\x3d\"{$this->_123q23zaaic4asnz69ma3ta3p5}\"\x20\x61\154\164\x3d\"\"\x20\x2f\x3e\74\163\160\141\156\40\163\x74\x79\154\x65\x3d\"\143\x6f\154\157\x72\x3a\x72\x65\144\x20\41\151\155\160\x6f\162\164\x61\x6e\x74\x3b\"\x3e{$this->_o9x8mtemx5ej3yok}\74\57\163\x70\141\156\76\x3c\57\x61\76\74\41\55\x2d\r\n"; } } if ($this->SoundEnabled) { $_Immxyt9aqv6rsq43 .="\x20\x20\40\x2d\55\x3e\x3c\x64\x69\166\x20\143\154\141\x73\x73\75\"\114\x42\104\x5f\120\154\x61\143\145\x68\157\154\x64\x65\x72\"\x20\x69\144\75\"{$this->_lw7ebjlmi6q1drw4xpkdv}\x5f\101\165\x64\x69\157\x50\x6c\x61\143\145\x68\x6f\x6c\144\x65\162\"\76\x26\x6e\142\x73\160\73\74\x2f\x64\x69\x76\x3e\x3c\x21\x2d\x2d\r\n"; } $_Immxyt9aqv6rsq43 .= "\x20\55\x2d\76\74\57\144\151\166\76\r\n"; } return $_Immxyt9aqv6rsq43; } private function o7wh9($_Impkb97p0sqgg1cs) { $_l2exwzf0bniawlx9aqq01d6gj1 = $this->_0jsvqb1h48fu823n->AutoFocusInput ? "\x74\x72\165\x65" : "\x66\x61\x6c\x73\145"; $_oxnldpr83dr2davj = $this->_0jsvqb1h48fu823n->AutoClearInput ? "\164\x72\x75\x65" : "\x66\141\x6c\163\145"; $_lss7uvo3fnxy2s7p62fvjfmv6k = false; if (isset($this->_0jsvqb1h48fu823n->AutoLowercaseInput)) { $_lss7uvo3fnxy2s7p62fvjfmv6k = $this->_0jsvqb1h48fu823n->AutoLowercaseInput ? "\x74\x72\165\145" : "\146\x61\x6c\163\145"; } else if (isset($this->_0jsvqb1h48fu823n->AutoUppercaseInput)) { $_lss7uvo3fnxy2s7p62fvjfmv6k = $this->_0jsvqb1h48fu823n->AutoUppercaseInput ? "\164\162\165\145" : "\146\x61\154\163\145"; } $_Irrmrvni4j64fdav1uu89di5b9 = $this->_0jsvqb1h48fu823n->AutoReloadExpiredCaptchas ? "\x74\x72\165\145" : "\x66\141\x6c\x73\x65"; $_Owweta5r0dnbp3152dedon1wyb = $this->_0jsvqb1h48fu823n->AutoReloadTimeout; $_Oaqq1jv5dpuxc6empaxsl = $this->_0jsvqb1h48fu823n->SoundStartDelay; $_Impkb97p0sqgg1cs .= "\x20\x20\40\40\x3c\163\x63\162\x69\x70\164\40\x73\162\143\x3d\"{$this->ScriptIncludeUrl}\"\40\x74\x79\x70\145\x3d\"\164\x65\170\164\57\x6a\x61\166\141\163\143\x72\x69\160\164\"\x3e\74\57\x73\x63\162\x69\x70\164\x3e\r\n"; $_Impkb97p0sqgg1cs .= "\x20\x20\x20\x20\x3c\x73\x63\162\x69\160\164\40\x74\x79\x70\x65\x3d\"\164\x65\x78\164\57\152\141\x76\141\163\143\x72\x69\160\164\"\76\x2f\57\74\x21\133\x43\104\101\124\x41\x5b\r\n"; $_Impkb97p0sqgg1cs .= "\40\40\x20\40\x20\40\x42\x6f\x74\x44\145\164\145\x63\164\x2e\x49\x6e\151\164\50\x27{$this->_lw7ebjlmi6q1drw4xpkdv}\x27\54\40\47{$this->InstanceId}\47\54\x20\47{$this->_O63how9apgdrq3wc1jw2tgeqzl}\x27\54\x20{$_l2exwzf0bniawlx9aqq01d6gj1}\54\40{$_oxnldpr83dr2davj}\x2c\40{$_lss7uvo3fnxy2s7p62fvjfmv6k}\x2c\x20{$_Irrmrvni4j64fdav1uu89di5b9}\x2c\40{$this->CodeTimeout}\x2c\x20{$_Owweta5r0dnbp3152dedon1wyb}\54\x20{$_Oaqq1jv5dpuxc6empaxsl}\x29\73\r\n"; $_Impkb97p0sqgg1cs .= "\40\x20\x20\40\57\57\135\135\x3e\x3c\57\x73\143\x72\151\x70\164\x3e\r\n"; $_Impkb97p0sqgg1cs .= "\40\x20\x20\40\74\x69\156\160\165\x74\40\164\171\x70\145\x3d\"\150\151\x64\x64\145\156\"\40\x6e\141\x6d\x65\x3d\"{$this->_Oq3w7fs1nex3zscid5ypn}\"\40\151\144\75\"{$this->_Oq3w7fs1nex3zscid5ypn}\"\x20\166\141\x6c\165\x65\x3d\"{$this->InstanceId}\"\x20\x2f\x3e\r\n"; return $_Impkb97p0sqgg1cs; } private function k957p($_1otkglam7x3ns77v) { $this->_iny1dx2pkst4gwuddtit3 = LBD_RemoteScriptHelper::GetRemoteScriptEnabled($this->_iny1dx2pkst4gwuddtit3); if ($this->_iny1dx2pkst4gwuddtit3) { $_1otkglam7x3ns77v .= LBD_RemoteScriptHelper::GetRemoteScriptMarkup(); } return $_1otkglam7x3ns77v; } public static function IsFree() { return LBD_CaptchaBase::IsFree; } public static function GetProductInfo() {  } private function mlopb() { return $this->HelpLinkHeight; } public function __get($_18q1gr49eu3k43xr) { if (method_exists($this->_08zj64b6y4sxb8y8, ($_lm6bk72v1x3mcgu1j92ru = "\x67\145\x74\137".$_18q1gr49eu3k43xr))) { return $this->_08zj64b6y4sxb8y8->$_lm6bk72v1x3mcgu1j92ru(); } else if (method_exists($this, ($_lm6bk72v1x3mcgu1j92ru = "\x67\x65\x74\x5f".$_18q1gr49eu3k43xr))) { return $this->$_lm6bk72v1x3mcgu1j92ru(); } else return; } public function __isset($_ofustca4yfbe6pi4) { if (method_exists($this->_08zj64b6y4sxb8y8, ($_0wmxnrwnq7o50tr2m949vd5o7q = "\151\163\163\x65\164\x5f".$_ofustca4yfbe6pi4))) { return $this->_08zj64b6y4sxb8y8->$_0wmxnrwnq7o50tr2m949vd5o7q(); } else if (method_exists($this, ($_0wmxnrwnq7o50tr2m949vd5o7q = "\151\163\x73\x65\164\x5f".$_ofustca4yfbe6pi4))) { return $this->$_0wmxnrwnq7o50tr2m949vd5o7q(); } else return; } public function __set($_07mr0r665lo36z6kf7zk2, $_16wxa5au678u32iiez9wf) { if (method_exists($this->_08zj64b6y4sxb8y8, ($_odg40tkisx9atjwj = "\163\145\164\137".$_07mr0r665lo36z6kf7zk2))) { $this->_08zj64b6y4sxb8y8->$_odg40tkisx9atjwj($_16wxa5au678u32iiez9wf); } else if (method_exists($this, ($_odg40tkisx9atjwj = "\x73\145\x74\137".$_07mr0r665lo36z6kf7zk2))) { $this->$_odg40tkisx9atjwj($_16wxa5au678u32iiez9wf); } } public function __unset($_1piuen35rwiawuoe1rny3) { if (method_exists($this->_08zj64b6y4sxb8y8, ($_o8e5ug356tigi8oi8gur4soj3f = "\x75\x6e\x73\x65\x74\x5f".$_1piuen35rwiawuoe1rny3))) { $this->_08zj64b6y4sxb8y8->$_o8e5ug356tigi8oi8gur4soj3f(); } else if (method_exists($this, ($_o8e5ug356tigi8oi8gur4soj3f = "\x75\156\163\145\x74\x5f".$_1piuen35rwiawuoe1rny3))) { $this->$_o8e5ug356tigi8oi8gur4soj3f(); } } } ?>