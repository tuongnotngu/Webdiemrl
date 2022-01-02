#include<bits/stdc++.h>
#define task "repetitions"
using namespace std;
string s;
long long int  dema,demc,demt,demg,d,n,i,x=0;
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
 d=0;
 for (i=0;i<n;i++){
    if((s[i]==s[i+1])&&(s[i]=='A'))
    {
        dema++;
        demt=1;
        demg=1;
        demc=1;
    }
    if (dema>d) d=dema;
    else if((s[i]==s[i+1])&&(s[i]=='T')) {
            demt++;
            demg=1;
        demc=1;
        dema=1;
    }
    if (demt>d) d=demt;
    else if((s[i]==s[i+1])&&(s[i]=='G')) {
            demg++;
        demc=1;
        dema=1;
        demt=1;}
        if(demg>d) d=demg;
    else if((s[i]==s[i+1])&&(s[i]=='C')) {
            demc++;
        dema=1;
        demt=1;
        demg=1;}
        if(demc>d)d=demc;
 }

  cout<<d;
}
