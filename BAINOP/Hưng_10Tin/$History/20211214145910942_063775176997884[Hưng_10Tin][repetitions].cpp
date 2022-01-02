#include<bits/stdc++.h>
#define task "repetitions"
using namespace std;
string s;
long long dema,demc,demt,demg,d,n,i,x;
int main()
{
//  ios_base:: sync_with_stdio(0);
//  cin.tie(0);
//  cout.tie(0);
if(fopen(task".inp","r"))
 {
  freopen(task".inp","r",stdin);
  freopen(task".out","w",stdout);

 }
 cin>>s;
 n=s.size();
 demt=1;
 dema=1;
 demg=1;
 demc=1;
 for (i=0;i<n;i++){
    if((s[i]==s[i+1])&&(s[i]=='A'))dema++;
    else if((s[i]==s[i+1])&&(s[i]=='T'))demt++;
    else if((s[i]==s[i+1])&&(s[i]=='G'))demg++;
    else if((s[i]==s[i+1])&&(s[i]=='C'))demc++;;
 }
 x=max(demg,demc);
 d=max(max(dema,demt),x);
  cout<<d;

}
