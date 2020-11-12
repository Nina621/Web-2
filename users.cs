using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Web
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _userId;
        protected string _userEmail;
        protected string _userPass;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string userEmail, string userPass)
        {
            this._userEmail=userEmail;
            this._userPass=userPass;
        }
        #endregion
        #region Public Properties
        public virtual int UserId
        {
            get {return _userId;}
            set {_userId=value;}
        }
        public virtual string UserEmail
        {
            get {return _userEmail;}
            set {_userEmail=value;}
        }
        public virtual string UserPass
        {
            get {return _userPass;}
            set {_userPass=value;}
        }
        #endregion
    }
    #endregion
}