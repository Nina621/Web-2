using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Web
{
    #region Pregled
    public class Pregled
    {
        #region Member Variables
        protected int _ID;
        protected int _ŠIFRA_PODUZECA;
        protected string _NAZIV;
        protected string _ADRESA;
        protected int _POŠTANSKI_BROJ;
        protected int _IBAN;
        protected string _BANKA;
        protected int _OIB;
        protected int _KONTAKT;
        protected string _OPIS;
        #endregion
        #region Constructors
        public Pregled() { }
        public Pregled(int ŠIFRA_PODUZECA, string NAZIV, string ADRESA, int POŠTANSKI_BROJ, int IBAN, string BANKA, int OIB, int KONTAKT, string OPIS)
        {
            this._ŠIFRA_PODUZECA=ŠIFRA_PODUZECA;
            this._NAZIV=NAZIV;
            this._ADRESA=ADRESA;
            this._POŠTANSKI_BROJ=POŠTANSKI_BROJ;
            this._IBAN=IBAN;
            this._BANKA=BANKA;
            this._OIB=OIB;
            this._KONTAKT=KONTAKT;
            this._OPIS=OPIS;
        }
        #endregion
        #region Public Properties
        public virtual int ID
        {
            get {return _ID;}
            set {_ID=value;}
        }
        public virtual int ŠIFRA_PODUZECA
        {
            get {return _ŠIFRA_PODUZECA;}
            set {_ŠIFRA_PODUZECA=value;}
        }
        public virtual string NAZIV
        {
            get {return _NAZIV;}
            set {_NAZIV=value;}
        }
        public virtual string ADRESA
        {
            get {return _ADRESA;}
            set {_ADRESA=value;}
        }
        public virtual int POŠTANSKI_BROJ
        {
            get {return _POŠTANSKI_BROJ;}
            set {_POŠTANSKI_BROJ=value;}
        }
        public virtual int IBAN
        {
            get {return _IBAN;}
            set {_IBAN=value;}
        }
        public virtual string BANKA
        {
            get {return _BANKA;}
            set {_BANKA=value;}
        }
        public virtual int OIB
        {
            get {return _OIB;}
            set {_OIB=value;}
        }
        public virtual int KONTAKT
        {
            get {return _KONTAKT;}
            set {_KONTAKT=value;}
        }
        public virtual string OPIS
        {
            get {return _OPIS;}
            set {_OPIS=value;}
        }
        #endregion
    }
    #endregion
}